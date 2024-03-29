<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ContactUsModel;
use PDF;
use \ZipArchive;
use Redirect;
use App\Sharepoint\Search;
use Office365\Runtime\Auth\ClientCredential;
use Office365\SharePoint\ClientContext;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
use Office365\SharePoint\ListItem;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;


class ServiceController extends Controller
{
    public function document() {
        return view('frontend_view.services.document_view');
    }
    public function certificate_pdf(Request $request) {
        echo "<pre>";
        print_r($request->all());
        
        die;
    }
    public function validate_certificate(Request $request) {

        ini_set('memory_limit', '1024M');
        ini_set('max_execution_time', '300');

        if(isset($request->COAform) && $request->COAform=='coa') {
        
            if (!isset($request->productcode) || !isset($request->batch)) {
                $request->session()->flash('error', "Ensure you enter your product code and batch number!");
                return back();
            }

            $credentials = new ClientCredential("6a0f7e52-71c7-4769-86fb-24648fc5065f", "KnKjB70cWeqYYIyvkzwMJFkF8S1WrIymf10utYEyP1M=");
            $ctx = (new ClientContext("https://johnsontestpapers.sharepoint.com/sites/JTP"))->withCredentials($credentials);
            $paper = \Office365\SharePoint\File::openBinary($ctx, '/sites/JTP/Shared Documents/Batch Numbers/Batch Numbers - Filter Paper.xlsx');
            $strips = \Office365\SharePoint\File::openBinary($ctx, '/sites/JTP/Shared Documents/Batch Numbers/Batch Numbers - Test Papers_Strips.xlsx');
            file_put_contents(storage_path() . '/paper.xlsx', $paper);
            file_put_contents(storage_path() . '/strips.xlsx', $strips);
            $sheet = ReaderEntityFactory::createReaderFromFile(storage_path() . '/strips.xlsx');
            $paper = ReaderEntityFactory::createReaderFromFile(storage_path() . '/paper.xlsx');

            $sheet->open(storage_path() . '/strips.xlsx');
            $paper->open(storage_path() . '/paper.xlsx');
            $batchcode = $request->batch;
            if(strlen($batchcode) <= 5){
                $foundbatchsheet = Search::FindBatchBySheet([$paper], $batchcode);
            } else {
                $foundbatchsheet = Search::FindBatchBySheet([$sheet, $paper], $batchcode);
            }

            if ($foundbatchsheet == null) {
                $request->session()->flash('error', "We cant find that batch... If you keep seeing this error, but are typing in a correct batch please contact cs@johnsontestpapers.com, and include the batch number you're entering.");
                return back();
            }

            $tab =  (string)$foundbatchsheet['tab'];
            $tab = str_replace("WSQLF","Wet-strengthened Qualitative Filter Paper",str_replace("WSQNF","Wet-strengthened Quantitative Filter Paper",str_replace("MEMF","Membrane Filter",str_replace("Universal Indicator Paper p","Universal Indicator Paper pH 1 - 14",str_replace("(Virucid","(Virucidal)",str_replace("101.3 Universal Indicator Strip","101.3 Universal Indicator Strips 0-14",str_replace("110 pH Indicator Paper 11.0-13","110 pH Indicator Paper 11.0 - 13.0",str_replace("Sudan III Impregnated Pap","Sudan III Impregnated Paper",str_replace("CAD","Copper Acetate Disc",$tab)))))))));
            if (strpos($tab, 'Thimble')) {
                $producttype = 'Thimble';
            } elseif (strpos($tab, 'Filter') && strpos($tab, 'Syringe') == False && strpos($tab, 'Membrane') == False) {
                $producttype = 'Filter Paper';
            } elseif (strpos($tab, 'Syringe')) {
                $producttype = 'Syringe';
            } elseif (strpos($tab, 'Membran')) {
                $producttype = 'Membrane';
            } 
            elseif (strpos($tab, 'Wet-strengthened Qualitativ')) {
                $producttype = 'Filter Paper';
            }
            elseif (strpos($tab, 'Qualitat')) {
                $producttype = 'Filter Paper';
            }else {
                $producttype = 'Strips';
            }
            switch ($producttype) {
                case 'Filter Paper':
                    $diameter = substr($request->productcode, -3);
                    if ($diameter[0] !== "0") {

                    } else {
                        $diameter = substr($request->productcode, -2);
                    }
                    $pdf = \PDF::loadView('frontend_view.pdf.coa.filterpaper', ['data' => $foundbatchsheet, 'productname' => $tab, 'diameter' => $diameter])->setPaper('a4');
                    return $pdf->stream($tab . ' ' . $batchcode . '.pdf');
                    break;
                case 'Membrane':
                    $pdf = \PDF::loadView('frontend_view.pdf.coa.membrane', ['data' => $foundbatchsheet, 'productname' => $tab])->setPaper('a4');
                    return $pdf->stream($tab . ' ' . $batchcode . '.pdf');
                    break;
                case 'Syringe':
                    $pdf = \PDF::loadView('frontend_view.pdf.coa.syringe', ['data' => $foundbatchsheet, 'productname' => $tab])->setPaper('a4');
                    return $pdf->stream($tab . ' ' . $batchcode . '.pdf');
                    break;
                case 'Thimble':
                    $pdf = \PDF::loadView('frontend_view.pdf.coa.thimble', ['data' => $foundbatchsheet, 'productname' => $tab, 'productcode' => $request->productcode])->setPaper('a4');
                    return $pdf->stream($tab . ' ' . $batchcode . '.pdf');
                    break;
                case 'Strips':
                    $pdf = \PDF::loadView('frontend_view.pdf.coa', ['foundbatch' => $foundbatchsheet, 'productname' =>  $tab, 'productcode' => explode(" ",  $foundbatchsheet['tab'])[0]])->setPaper('a4');
                    return $pdf->stream($tab . ' ' . $batchcode . '.pdf');
                    break;
            }
            $request->session()->flash('error', "We can't find that batch... If you keep seeing this error, but are typing in a correct batch please contact cs@johnsontestpapers.com, and include the batch number you're entering.");
            return back();
        }else if(isset($request->COAform) && $request->COAform=='coc') {


                $product_data = DB::table('subcategory_presentation as scp')
                                    ->leftJoin('subcategory as sc','sc.id','=','scp.subcat_id')
                                    ->where('scp.sp_prod_code',$request->prod_name)
                                    ->get(['sc.sub_cat_name','sc.sc_ranges','scp.sp_prod_code','scp.sp_presentation']);
                
                if($product_data->isEmpty()) {
                    $request->session()->flash('error', "We cant find that product... If you keep seeing this error, but are typing in a correct batch please contact cs@johnsontestpapers.com, and include the batch number you're entering.");
                    return back();
                }else{
                    $pdf = \PDF::loadView('frontend_view.pdf.coc', ['product' => $product_data])->setPaper('a4');
                    return $pdf->stream($request->productcode . 'certificate of conformity' . '.pdf');
                }
        }else if(isset($request->COAform) && $request->COAform=='msds'){
           
            
            if ($request->productcode) {

                // If their search includes CE, just search normally
    
                if (strpos($request->productcode, 'CE')) {
                    $table = DB::TABLE('MSDS')->SELECT('*')->WHERE('product_codes', 'LIKE', "%$request->productcode%")->first();
                        // Else, find a product where there's no CE- Prevents 004.1CE showing when searching for 004.1
                } else {
                    $table = DB::TABLE('MSDS')->SELECT('*')->WHERE('product_codes', 'LIKE', "%$request->productcode%")->WHERE('product_codes', 'NOT LIKE', "%CE%")->first();
                }
  
                if (isset($table)) {
                    if ($table->hazard == 0) {
                        try {
                            // Trim the name, just to remove any potential errors.
                            $table->product_name = trim($table->product_name);
                            $pdf = \PDF::loadView('frontend_view.pdf.msds', ['data' => $table])->setPaper('a4');
                            return $pdf->stream($table->product_name . ' MSDS' . '.pdf');
                        } catch (\Exception $e) {
                            $request->session()->flash('error', "An MSDS may not be available for this product yet. If you keep seeing this error, but are typing in a correct product please contact cs@jtp.uk.com, and include the product code you're entering.");
                            return back();
                        }
                    } else {
                        try {
                            $pdf = \PDF::loadView('frontend_view.pdf.msds-hazard', ['data' => $table])->setPaper('a4');
                            return $pdf->stream($table->product_name . ' MSDS' . '.pdf');
                        } catch (\Exception $e) {
                            $request->session()->flash('error', "An MSDS may not be available for this product yet. If you keep seeing this error, but are typing in a correct product please contact cs@jtp.uk.com, and include the product code you're entering.");
                            return back();
                        }
                    }
                } else {
                    $request->session()->flash('error', "An MSDS may not be available for this product yet. If you keep seeing this error, but are typing in a correct product please contact cs@jtp.uk.com, and include the product code you're entering.");
                    return back();
                }
            } else {
                $request->session()->flash('error', "Please enter a product code.");
                return back();
            }
        }
        else{
            $pdfname = $pdfname . '.pdf';
            try {
                return \Response::make(file_get_contents("pdfs/tds/" . $pdfname), 200, [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="' . $pdfname . '"'
                ]);
            } catch (\Exception $e) {
                abort(404, "This TDS does not exist- go back and try again");
            }
        }
    }
    public function faq() {
        $faq_data = DB::table('faq')
                    ->get();
        return view('frontend_view.services.faq', compact('faq_data'));
    }

    public function contact_us() {
        $country_data = DB::table('country as c')
                        ->get();
        return view('frontend_view.services.contact_us_view', compact('country_data'));
    }
    public function validate_contact(Request $request) {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'contact_num' => 'required',
            'company' => 'required',
            'country' => 'required',
            'message' => 'required',
            'checkbox_val' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        if ($validator->fails()) {
                return Redirect::back()->withErrors($validator);
            //return back()->with('danger','Please enter all the details');
        } else {
            $data = new ContactUsModel;
            $data->full_name = $request->full_name;
            $data->subject = $request->subject;
            $data->email_id = $request->email;
            $data->contact_numb = $request->contact_num;
            $data->company_name = $request->company;
            $data->country_id = $request->country;
            $data->message = $request->message;
            $data->save();

                $to      =  'dev@johnsontestpapers.com';
                $subject =  $request->subject;
                $message =  'hello';
                $headers =  'From: dev@johnsontestpapers.com'       . "\r\n" .
                 'Reply-To: dev@johnsontestpapers.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

                $email = 'dev@johnsontestpapers.com';
                $name = $request->full_name;

                //mail($to, $subject, $message, $headers);

        Mail::send('frontend_view.mail.send', ['name' => $request->full_name, 'subject' => $request->subject ,'email' => $request->email,'company' => $request->company,'country' => $request->country, 'details'=> $request->message], function ($m) use($subject,$email,$name)
        {
            $m->from("system@johnsontestpapers.com", 'Web System - JTP - CONTACT FORM');
            $m->to('dev@johnsontestpapers.com')->subject($subject);
            $m->replyTo("$email", "$name");
        });

            return back()->with('success','Enquiry Received');
        }

        return view('frontend_view.contact_us_view', compact('country_data'));
    }

    public function knowledge() {
        return view('frontend_view.services.knowledge_view');
    }

    public function catalouge() {
        return view('frontend_view.services.catalouge_view');
    }
}
