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
|
*/
//---------------------------------------------------------------------------------


/////////////////////////////////////////////////////////////////////////AJAX_class
Route::get('all.classes', 'classcontroller@all_classes') ;
Route::get('get_classes/{id}', 'classcontroller@get_classes') ;
Route::post('insert_class', 'classcontroller@insert_class') ;
Route::post('edite_class', 'classcontroller@edite_class') ;
Route::get('delete_class/{class}', 'classcontroller@delete_class') ;
/////////////////////////////////////////////////////////////////////////AJAX_student
Route::get('all.students', 'studentcontroller@all_students') ;
Route::get('get_students/{id}', 'studentcontroller@get_students') ;
Route::post('insert_student', 'studentcontroller@insert_student') ;
Route::post('edite_student', 'studentcontroller@edite_student') ;
Route::get('delete_student/{student}', 'studentcontroller@delete_student') ;
































Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
