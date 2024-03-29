<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function homepage() {
        $range_data = DB::table('range as r')
                        ->orderBy('r.order_wise','ASC')
                        ->get();
        $prod_data = DB::table('product as r')
                        ->get();
        
       return view('frontend_view.dashboard', compact('range_data','prod_data'));
    }
    
    public function search_data(Request $request) {
        
        if($request->ajax()) {
            if($request->search!=''){
                $result_data = DB::table('category as c')
                        ->where('c.cat_name','like','%'. $request->search.'%')
                        ->orderBy('c.cat_name')
                        ->get();
                
                $output = '';
                $option_size='2';
                if(count($result_data)>0) {
                    if(count($result_data)>2) {
                        $option_size=7;
                    }
                    $output = '<select size="'.$option_size.'" class="search-list text-white" onchange="location = this.value;" style="width:40%;background:transparent;border-left:none; border-bottom:1px solid #d3d3d3;">';
                    foreach($result_data as $value) {
                        $output .= '<option style="padding: 10px;" value="'.$value->cat_url.'">'.$value->cat_name.' '.$value->cat_ranges.'</option>';
                    }
                        $output .= '</select>';
                }else{
                    $output = '<select class="search-list text-white" style="width:40%;background:transparent; padding:10px;border:none;"><option style="color:red;">oops ! No Result Found</option></select>';
                }
                return $output;
            }
        }
    }

}
