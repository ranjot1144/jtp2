<?php

use App\Http\Controllers\frontend\PDFController;
use App\Http\Controllers\frontend\WebsiteController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\CompanyController;
use App\Http\Controllers\frontend\RangeController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[WebsiteController::class,'homepage']);
Route::get('/input_search',[WebsiteController::class,'search_data']);

//Range Controller
Route::get('product/{range_name}',[RangeController::class,'index']);
Route::get('product/{range_name}/{prod_url}',[RangeController::class,'product']);
Route::get('product/{range_name}/{prod_url}/{cat_url}',[RangeController::class,'category']);
Route::get('product/{range_name}/{prod_url}/{cat_url}/{sub_cat_url}',[RangeController::class,'grades']);

Route::POST('product/filtration/grade_list',[RangeController::class,'ff_grades_list']);
Route::POST('product/filtration/thimble_list',[RangeController::class,'thimble_list']);

Route::get('products/industry/education',[RangeController::class,'education']);

//Visual Test Kits
Route::get('products/vtk/{}',[RangeController::class,'vtk_product']);



//Route::get('industries/education',[RangeController::class,'education']);


Route::prefix('/frontend')->namespace('App\Http\Controllers\frontend')->group(function(){
    Route::get('filteration','FilterationController@filteration');
    Route::get('filteration/filter-paper','FilterationController@filterpaper');
    Route::get('filteration/filter-paper/quantitative','FilterationController@quantitativepage');
    Route::get('filteration/filter-paper/quantitative/categories','FilterationController@quant_cat');
    Route::get('products','ProductController@product');
    Route::get('products/filter-paper','ProductController@filteration');

    // Route::get('product/{id}','ProductController@products');


    
//Range Page
    Route::get('product/{range_name}','RangeController@index');
    Route::get('product_page/{range_name}/{id}','RangeController@ranges');
    //Route::get('product/{prod_name}','RangeController@product_page');
    Route::get('product_page/{range_name}/{prod_id}/{cat_id}','RangeController@sub_category');
    Route::get('product_page/{range_name}/{prod_id}/{cat_id}/{sub_cat_id}','RangeController@grade');

//PDF Generate
    Route::get('generate_pdf',[PDFController::class, 'generatePDF']);

});

//Company
    Route::get('company/about-us',[CompanyController::class,'aboutUs']);
    Route::get('company/imprint',[CompanyController::class,'imprint']);
    Route::get('company/terms',[CompanyController::class,'terms_condition']);
    Route::get('company/privacy_policy',[CompanyController::class,'privacy_policy']);

    Route::get('company/news-development',[CompanyController::class,'news']);

//Support
    Route::get('support/contact-us',[ServiceController::class,'contact_us']);
    Route::POST('support/validate_contact_form',[ServiceController::class,'validate_contact']);

    Route::get('support/document',[ServiceController::class,'document']);
    Route::POST('support/document',[ServiceController::class,'validate_certificate']);

    Route::get('support/catalogue',[ServiceController::class,'catalouge']);
    Route::get('support/knowledge_hub',[ServiceController::class,'knowledge']);
    Route::get('support/faq',[ServiceController::class,'faq']);


