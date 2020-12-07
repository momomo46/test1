<?php

use Illuminate\Support\Facades\Route;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|{
*/

Route::get('/',function (){
  return view('welcome');
});
Route::get('jissyu13', 'App\Http\Controllers\Jissyu5_3Controller@index');
Route::get('jissyu13/show', 'App\Http\Controllers\Jissyu5_3Controller@show');
Route::get('jissyu13/add', 'App\Http\Controllers\Jissyu5_3Controller@add');
Route::post('jissyu13/create', 'App\Http\Controllers\Jissyu5_3Controller@create');
Route::get('jissyu13/edit', 'App\Http\Controllers\Jissyu5_3Controller@edit');
Route::post('jissyu13/update', 'App\Http\Controllers\Jissyu5_3Controller@update');
Route::get('jissyu13/del', 'App\Http\Controllers\Jissyu5_3Controller@del');
Route::post('jissyu13/remove', 'App\Http\Controllers\Jissyu5_3Controller@remove');



Route::get('sample','TestController@index');

Route::get('/hello', 'App\Http\Controllers\HelloController@index');
Route::post('/hello', 'App\Http\Controllers\HelloController@post');

Route::get('/company', 'App\Http\Controllers\CompanyController@index');
Route::post('/company', 'App\Http\Controllers\CompanyController@post');

Route::get('/kanrisya', 'App\Http\Controllers\KanrisyaController@index');
Route::post('/kanrisya', 'App\Http\Controllers\KanrisyaController@post');

Route::get('/kanrisya2', 'App\Http\Controllers\KanrisyaController2@index');
Route::post('/kanrisya2', 'App\Http\Controllers\KanrisyaController2@post');

Route::get('/kanrisyaDB', 'App\Http\Controllers\KanrisyaInformationController@index');
Route::get('kanrisyaDB/edit', 'App\Http\Controllers\KanrisyaInformationController@edit');
Route::post('kanrisyaDB/update', 'App\Http\Controllers\KanrisyaInformationController@update');
Route::get('kanrisyaDB/del', 'App\Http\Controllers\KanrisyaInformationController@del');
Route::post('kanrisyaDB/remove', 'App\Http\Controllers\KanrisyaInformationController@remove');

Route::get('/company2', 'App\Http\Controllers\CompanyController2@index');
Route::post('/company2', 'App\Http\Controllers\CompanyController2@post');

Route::get('/kigyou', 'App\Http\Controllers\HelloController3@index');
Route::post('/kigyou', 'App\Http\Controllers\HelloController3@post');

Route::get('/company3', 'App\Http\Controllers\CompanyController3@index');
Route::post('/company3', 'App\Http\Controllers\CompanyController3@post');

Route::get('/company4', 'App\Http\Controllers\HelloController3@index');
Route::post('/company4', 'App\Http\Controllers\HelloController3@post');

Route::get('/company5', 'App\Http\Controllers\CompanyController4@index');
Route::post('/company5', 'App\Http\Controllers\CompanyController4@post');

Route::get('/company6', 'App\Http\Controllers\QuestionController@index');
Route::post('/company6', 'App\Http\Controllers\QuestionController@post');

Route::get('/company7', 'App\Http\Controllers\InformationController@index');
Route::post('/company7', 'App\Http\Controllers\InformationController@post');

Route::get('company/add', 'App\Http\Controllers\CompanyaddController@add');
Route::post('company/create','App\Http\Controllers\CompanyaddController@create');

Route::get('question', 'App\Http\Controllers\QuestionController@index');
Route::post('question', 'App\Http\Controllers\QuestionController@post');
Route::post('question/re', 'App\Http\Controllers\QuestionController@re');
Route::get('question/edit', 'App\Http\Controllers\QuestionController@edit');
Route::post('question/update', 'App\Http\Controllers\QuestionController@update');
Route::get('question/add', 'App\Http\Controllers\QuestionController@add');
Route::post('question/create', 'App\Http\Controllers\QuestionController@create');

Route::get('hello', 'App\Http\Controllers\HelloController2@index');
Route::post('hello', 'App\Http\Controllers\HelloController2@post');

Route::get('hello/add', 'App\Http\Controllers\HelloController2@add');
Route::post('hello/add', 'App\Http\Controllers\HelloController2@create');

Route::get('test', 'App\Http\Controllers\TestController@index');
Route::post('test', 'App\Http\Controllers\TestController@post');

Route::get('test/add', 'App\Http\Controllers\TestController@add');
Route::post('test/add', 'App\Http\Controllers\TestController@create');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/kigyou2', 'App\Http\Controllers\HelloController3@index');
Route::post('/kigyou2', 'App\Http\Controllers\HelloController3@post');


//ユーザー側検索
Route::get('/syukuhaku', 'App\Http\Controllers\KensakuController@syukuhaku');
Route::post('/syukuhaku', 'App\Http\Controllers\KensakuController@post');

Route::get('/insyoku', 'App\Http\Controllers\KensakuController@insyoku');
Route::post('/insyoku', 'App\Http\Controllers\KensakuController@post');

Route::get('/kankou', 'App\Http\Controllers\KensakuController@kankou');
Route::post('/kankou', 'App\Http\Controllers\KensakuController@post');

//Route::get('/free', 'App\Http\Controllers\FreeController@index');
//Route::post('/free', 'App\Http\Controllers\FreeController@post');

Route::get('/syukuhakuarea', 'App\Http\Controllers\KensakuController@syukuhakuarea');

Route::get('/insyokuarea', 'App\Http\Controllers\KensakuController@insyokuarea');
Route::post('/insyokuarea', 'App\Http\Controllers\KensakuController@post');

Route::get('/kankouarea', 'App\Http\Controllers\KensakuController@kankouarea');




/*Route::get('information', 'App\Http\Controllers\InformationController@index');
Route::get('information/add', 'App\Http\Controllers\InformationController@add');
Route::post('information/create', 'App\Http\Controllers\InformationController@create');*/

Route::get('freemap', 'App\Http\Controllers\MapController@index');


Route::get('settei/add', 'App\Http\Controllers\SetteiController@add');
Route::post('settei/create', 'App\Http\Controllers\SetteiController@create');


Route::get('contanct','App\Http\Controllers\ContactController@top');

Route::post('check','App\Http\Controllers\ContactController@check');

Route::get('kensakuDB', 'App\Http\Controllers\KekkaController@kensakuDB');

Route::get('information', 'App\Http\Controllers\InformationController@index');
Route::get('add', 'App\Http\Controllers\InformationController@add');
Route::post('create', 'App\Http\Controllers\InformationController@create');
Route::post('confirm', 'App\Http\Controllers\InformationController@confirm');