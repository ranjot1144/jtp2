<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ContactUsModel;

class RangeController extends Controller
{

    public function RemoveSpecialChar($str){
        $res = str_ireplace( array( '\'', '"',',' , ';', '<', '>' ), ' ', $str);
        // returning the result 
        return $res;
    }

    public function index($prod_name) {

        $range_data = DB::table('range as r')
                    ->where('r.range_url', 'product/'.$prod_name)
                    ->get(['r.id as prod_id', 'r.range_desc']);

        $range_url_id = isset($range_data[0]->prod_id)?$range_data[0]->prod_id:'';

        $industry_data = '';
        $industry_data = DB::table('product as p')
                            ->where('p.range_id','6')
                            ->get();
        
        if(isset($range_url_id)) {
            $range_pro_data = DB::table('range as r')
                            ->leftjoin('product as p', 'r.id', '=', 'p.range_id')
                            ->where('r.id',$range_url_id)
                            ->where('p.flag','1')
                            ->orderBy('p.order_wise')
                            ->get(['r.id as range_id','r.range_name','r.range_url','p.id','p.prod_name','p.prod_detail','p.prod_url','p.prod_images']);

            if($range_url_id=='1' || $range_url_id=='2' || $range_url_id=='3' || $range_url_id=='4' || $range_url_id=='5' || $range_url_id=='8') {
                return view('frontend_view.ranges.index', compact('range_data','range_pro_data','industry_data'));
            }
            else if($range_url_id=='6') {
                $industry_data = DB::table('product as p')
                            ->where('p.range_id',$range_url_id)
                            ->get();
                return view('frontend_view.ranges.industry',compact('industry_data'));
            }
            else if($range_url_id=='7') {
                return view('frontend_view.ranges.oem_view',compact('range_data'));
            }else{
                return view('errors.404');
            }
        }
    }

    public function product(Request $request, $prod_name, $prod_url) {

        $data = array(
            'prod_url' => $prod_url
        );

        if (str_contains($prod_url, 'article') == false) { 
            $range_data = DB::table('product as p')
                    ->select('p.id as prod_id','p.prod_name','p.prod_url','p.range_id','r.range_name','p.prod_desc','p.prod_detail')
                    ->leftjoin('range as r', 'r.id', '=', 'p.range_id')
                    ->where('p.prod_url','like', '%'.$prod_url.'%')
                    ->orderBy('p.order_wise')
                    ->get();

            if($range_data->isEmpty()){
                return view('errors.404');
            }else{
                $id = $range_data[0]->prod_id;
    
                $prod_data = array(
                            'prod_name' => $prod_name
                        );
                $cat_data = DB::table('category as c')
                                ->select('c.id as cat_id','c.cat_name','c.cat_ranges','c.cat_url','c.cat_image','c.prod_id')
                                ->orderBy('c.order_wise')
                                ->where('c.prod_id', $id)
                                ->get();

                $prod_desc_data = DB::table('product_desc as pd')
                                ->where('pd.prod_id', $id)
                                ->get();

                if($prod_name=='visual_test_kits' || $prod_name=='pool_and_spa') {
                    return view('frontend_view.ranges.visual_test_view', compact('range_data','prod_data','cat_data','prod_desc_data'));
                }else if($prod_name=='industries') {

                    $tags = DB::table('industry_product_tags as ipt')
                                ->where('ipt.ip_id', $id)
                                ->get();

                    $cat_tags_data = array();
                    $prod_tags_data = array();

                    if($tags->isNotEmpty()){
                    $cat_tags = explode(",",$tags[0]->ip_cat_tags);
                    $prod_tags = explode(",",$tags[0]->ip_prod_tags);
                    
                    $cat_tags_data = DB::table('category as c')
                                    ->select('c.id as cat_id','c.cat_name')
                                    ->whereIn('c.id', $cat_tags)
                                    ->get();
                    
                    $prod_tags_data = DB::table('product as p')
                                    ->select('p.id as prod_id','p.prod_name')
                                    ->whereIn('p.id', $prod_tags)
                                    ->get();
                    }

                    return view('frontend_view.ranges.industry.education_view', compact('range_data','prod_data','cat_tags_data','prod_tags_data'));
                }else{

                    $man_data = DB::table('filterfinder_manufacturer as fm')
                                ->get();
                    $category_presentation = array();
                    if(!empty($cat_data)){
                        if($cat_data[0]->prod_id=='30') {
                            $category_presentation = DB::table('category as c')
                                                    ->leftjoin('category_presentation as cp','cp.cat_id','=','c.id')
                                                    ->where('c.prod_id',$cat_data[0]->prod_id)
                                                    ->get();
                        }
                    }
                    
                    
                    return view('frontend_view.ranges.products.index', compact('range_data','prod_data','cat_data','prod_desc_data','man_data','category_presentation'));
                }
            }
        }
        else {
            
            $prod_url = str_replace('article_', '', $prod_url);
            $prod_data = array(
                'prod_name' => $prod_name
            );
            $range_data = DB::table('product as p')
                    ->select('p.id as prod_id','p.prod_name','p.prod_desc')
                    ->where('p.prod_url','like', '%'.$prod_url.'%')
                    ->orderBy('p.order_wise')
                    ->get();
    

            $article_data = DB::table('prod_article as pa')
                            ->where('pa.p_id',$range_data[0]->prod_id)
                            ->get();

            return view('frontend_view.ranges.products.article', compact('prod_data','range_data','article_data'));
        } 
       
    }



    public function ranges(Request $request, $prod_name, $id) {

        $data = array(
            'range_id' => $id
        );

        $range_data = DB::table('product as p')
                    ->select('p.id as prod_id','p.prod_name','p.range_id')
                    ->where('p.id', $id)
                    ->get();

        $prod_data = array(
                    'prod_name' => $prod_name
                );

        $cat_data = DB::table('category as c')
                    ->select('c.id as cat_id','c.cat_name')
                    ->orderBy('c.cat_name')
                    ->where('c.prod_id', $id)
                    ->get();

        $prod_desc_data = DB::table('product_desc as pd')
                        ->where('pd.prod_id', $id)
                        ->get();
        
        return view('frontend_view.ranges.products.index', compact('range_data','prod_data','cat_data','prod_desc_data'));
    }

    public function product_page($name) {

        $prod_name = str_replace('-', ' ', $name);
        $prod_data = DB::table('product')
                    ->select('prod_id','prod_name','range_id')
                    ->where('prod_name', $prod_name)->get();
        
        return view('frontend_view.ranges.products.filter_paper', compact('prod_data'));
        
    }

    public function category($range_name, $prod_url, $cat_url) {
        $data = array(
                'range_name' => $range_name,
                'prod_url' => $prod_url,
                'cat_url' => $cat_url
        );
        $range_data = DB::table('product as p')
                    ->select('p.id as prod_id','p.prod_name','p.range_id')
                    ->orderBy('p.id')
                    ->where('p.prod_url','like', '%'.$prod_url.'%')->get();

        $cat_data = DB::table('category as c')
                    ->select('c.id as cat_id','c.cat_name','c.cat_tags','c.cat_url','c.cat_desc','c.cat_ranges','c.cat_main_desc','c.cat_image')
                    ->orderBy('c.id')
                    ->where('c.cat_url','like', '%'.$cat_url.'%')->get();
        
        if($cat_data->isEmpty()){
            return view('errors.404');
        }else{
        
            $cat_id = $cat_data[0]->cat_id;
            if($cat_id=='2') {
                $sub_cat_data = DB::table('subcategory as sc')
                        ->select('sc.id as sub_cat_id','sc.sub_cat_name','sc.sc_ranges', 'sc.sc_ranges','sc.sc_desc','sc.subcat_url','sc.sc_images')
                        ->orderBy('sc.sub_cat_name','desc')
                        ->where('sc.cat_id', $cat_id)->get();    
            }else{
                $sub_cat_data = DB::table('subcategory as sc')
                        ->select('sc.id as sub_cat_id','sc.sub_cat_name','sc.sc_ranges', 'sc.sc_ranges','sc.sc_desc','sc.subcat_url','sc.sc_images','scp.*')
                        ->leftjoin('subcategory_presentation as scp','scp.subcat_id','=','sc.id')
                        ->orderBy('sc.order_wise','asc')
                        ->where('sc.cat_id', $cat_id)->get();
            }

            $category_presentation = DB::table('category_presentation as cp')
                        ->leftjoin('category as c','c.id','=','cp.cat_id')
                        ->where('cp.cat_id', $cat_id)->get();
                    
            $syringe_table_data = DB::table('category_filtration_syringe as cfs')
                        ->leftjoin('category_filtration_desc as cfdes','cfdes.id','=','cfs.cfdes_id')
                        ->where('cfs.cat_id',$cat_id)
                        ->orderBy('cfs.order_by','ASC')
                        ->get();

            $membrane_table_data = DB::table('category_filtration_membrane as cfm')
                        ->leftjoin('category_filtration_desc as cfdes','cfdes.id','=','cfm.cfdes_id')
                        ->where('cfm.cat_id',$cat_id)
                        ->orderBy('cfm.order_by','ASC')
                        ->get();
            
            $tags = array();
            $tags = explode(',',$cat_data[0]->cat_tags);
            
            $cat_desc = DB::table('category_desc as cd')
                        ->where('cd.cat_id', $cat_id)->get();
            
            $extraction_thimble = DB::table('extraction_range as er')
                                    ->get();
            
            $cat_tags = DB::table('category as cat')
                            ->whereIn('cat.id', $tags)->get();

            $ext_thimb = DB::table('extraction_thimble as et')
                            ->where('et.cat_id', $cat_id)->get();

            return view('frontend_view.ranges.products.category.index', compact('data','range_data','cat_data','sub_cat_data','extraction_thimble','category_presentation','cat_desc','cat_tags','ext_thimb','syringe_table_data','membrane_table_data'));
        }
    }

    public function sub_category($range_name, $prod_id, $cat_id) {
        $data = array(
                'range_name' => $range_name,
                'prod_id' => $prod_id,
                'cat_id' => $cat_id
        );
        $range_data = DB::table('product as p')
                    ->select('p.id as prod_id','p.prod_name','p.range_id')
                    ->orderBy('p.prod_name')
                    ->where('p.id', $prod_id)->get();

        $cat_data = DB::table('category as c')
                    ->select('c.id as cat_id','c.cat_name')
                    ->orderBy('c.cat_name')
                    ->where('c.id', $cat_id)->get();

        $sub_cat_data = DB::table('subcategory as sc')
                    ->select('sc.id as sub_cat_id','sc.sub_cat_name','scr.sub_cat_ranges', 'sc.sc_ranges')
                    ->leftjoin('sub_cat_ranges as scr','scr.subcategory_id','=','sc.id')
                    ->orderBy('sc.sub_cat_name')
                    ->where('sc.cat_id', $cat_id)->get();

        return view('frontend_view.ranges.products.category.index', compact('data','range_data','cat_data','sub_cat_data'));
    }
    public function grades($range_name, $prod_url, $cat_url, $subcat_url) {

        $range_data = DB::table('product as p')
                    ->select('p.id as prod_id','p.prod_name','p.range_id')
                    ->where('p.prod_url','LIKE', '%'.$prod_url.'%')->get();
        
        $cat_data = DB::table('category as c')
                    ->select('c.id as cat_id','c.cat_name','c.cat_desc')
                    ->where('c.cat_url','LIKE', '%'.$cat_url.'%')->get();

        $subcat = DB::table('subcategory as sc')
                    ->select('sc.id as subcat_id','sc.sub_cat_name')
                    ->where('sc.subcat_url','LIKE', '%'.$subcat_url.'%')->get();
        
        $subcatdesc_data = array();
            if(count($subcat)){
                    $subcatdesc_data = DB::table('subcategory_desc as sd')
                        ->where('sd.sd_sc_id',$subcat[0]->subcat_id)->get();
            }

        if($cat_data[0]->cat_id=='2') {
            $cat_id = $cat_data[0]->cat_id;

            $sub_cat_data = DB::table('subcategory as sc')
                    ->select('sc.id as sub_cat_id','sc.sub_cat_name','sc.sc_ranges', 'sc.sc_ranges','sc.sc_desc','sc.subcat_url','sc.sc_images','scp.*')
                    ->leftjoin('subcategory_presentation as scp','scp.subcat_id','=','sc.id')
                    ->orderBy('sc.sub_cat_name','desc')
                    ->where('scp.subcat_id', $subcat[0]->subcat_id)->get();

        }else{
            $sub_cat_data = DB::table('subcategory as sc')
                    ->select('sc.id as sub_cat_id','sc.sub_cat_name','sc.sc_desc')
                    ->where('sc.subcat_url','LIKE', '%'.$subcat_url.'%')->get();
        }
        
        $subcat_id = '';
        if($sub_cat_data->isNotEmpty()) {
            $subcat_id = $sub_cat_data[0]->sub_cat_id;
        }
        $grade_data = array();
        if($subcat_id!='') {
            $grade_data = DB::table('grades as g')
                            ->leftjoin('grades_desc', 'grades_desc.grade_id', '=','g.id')
                            ->where('g.subcat_id', $subcat_id)->get();
        }
        
        $grade_code = DB::table('grades_code as gc')
                    ->get();

        return view('frontend_view.ranges.products.category.sub_cat.grade_page', compact('range_data','cat_data','sub_cat_data','grade_data','grade_code','subcatdesc_data'));
    }

    public function grade($range_name, $prod_id, $cat_id, $sub_cat_id) {
        $range_data = DB::table('product as p')
                    ->select('p.id as prod_id','p.prod_name','p.range_id')
                    ->where('p.id', $prod_id)->get();
        
        $cat_data = DB::table('category as c')
                    ->select('c.id as cat_id','c.cat_name')
                    ->where('c.id', $cat_id)->get();

        $sub_cat_data = DB::table('subcategory as sc')
                    ->select('sc.id as sub_cat_id','sc.sub_cat_name')
                    ->where('sc.id', $sub_cat_id)->get();

        $grade_data = DB::table('grades as g')
                    ->leftjoin('grades_desc', 'grades_desc.grade_id', '=','g.id')
                    ->where('g.subcat_id', $sub_cat_id)->get();
        
        $grade_code = DB::table('grades_code as gc')
                    ->get();

        return view('frontend_view.ranges.products.category.sub_cat.grade_page', compact('range_data','cat_data','sub_cat_data','grade_data','grade_code'));
    }

    public function education() {
        $cat_data = DB::table('category as c')
                    ->leftjoin('subcategory as sc','sc.cat_id','=','c.id')
                    ->where('c.cat_tags', 'like', '%12%')
                    ->get();
        
        return view('frontend_view.ranges.industry.education_view',compact('cat_data') );
    }

    public function ff_grades_list() {
        $man_id = $_POST['id'];
        $cat_data = DB::table('filterfinder_grade as fg')
                    ->where('fg.fm_id', $man_id)
                    ->select('fg.id','fg.fg_grade','fg.fg_recommedation','fg_url')
                    ->get();
        
        return $cat_data;
    }

    public function thimble_list(){
        $type_id = $_POST['id'];
        $data = DB::table('extraction_thimble as et')
                    ->where('et.cat_id', $type_id)
                    ->get();

        return $data;
    }
    
}
