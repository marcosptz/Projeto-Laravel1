<?php

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

// use Barryvdh\DomPDF\PDF;
use Illuminate\Database\Eloquent\Collection;
use Barryvdh\DomPDF\Facade as PDF;
//use Illuminate\Routing\Route;


Route::get('/', function() {
    return view('auth.login');
})->name('login');

Route::get('/registerUser', 'UserController@create')->name('registerUser');

Route::post('/storeUser', 'UserController@store')->name('storeUser');

Route::middleware(['auth'])->group(function(){


    Route::get('/welcome', function() {
        return view('welcome');
    })->name('welcome');

    Route::get('/cadastro', function () {
        return view('cadastro');
    })->name('cadastro');

    Route::get('/consultRegister', 'ClassSchoolController@consult_register')->name('consultRegister');

    Route::post('/resultRegister', 'ClassSchoolController@show_class')->name('resultRegister');

    Route::resource('/cadStudent', 'StudentController');

    Route::resource('/cadastrarTurma', 'ClassSchoolController');

    Route::get('/cadStudent', function () {
        return view('cadStudent');
    })->name('cadStudent');

    Route::get('/cadastrarTurma', function () {
        return view('cadClass');
    })->name('cadastrarTurma');

    Route::get('/auditStudent', 'AuditController@index')->name('auditStudent');

    Route::get('/auditConsult', 'AuditController@show')->name('auditConsult');

    Route::post('/auditShow', 'AuditController@show')->name('auditShow');

    Route::get('/registerClass', 'StudentController@list_register')->name('registerClass');

    Route::get('/test', 'StudentController@test')->name('test');

    Route::get('/searchDelete', 'StudentController@delete')->name('searchDelete');

    Route::get('/deleteStudent/{id}', 'StudentController@destroy')->name('deleteStudent');

    Route::get('/searchClassDelete', 'ClassSchoolController@delete')->name('searchClassDelete');

    Route::get('/deletingClass/{id}', 'ClassSchoolController@destroy')->name('deletingClass');

    Route::delete('/delete', 'StudentController@destroy')->name('delete');

    Route::delete('/deleteClass', 'ClassSchoolController@destroy')->name('deleteClass');

    Route::get('/editConsStudent', 'StudentController@cons_edit')->name('editConsStudent');

    Route::get('/editingStudent/{id}', 'StudentController@editing')->name('editingStudent');

    Route::post('/editStudent', 'StudentController@edit')->name('editStudent');

    Route::get('/resultConsRegistration', 'StudentController@reg_cons_student')->name('resultConsRegistration');

    Route::post('/register', 'RegisterController@create')->name('register');

    Route::post('/registration', 'StudentController@reg_student')->name('registration');

    Route::put('/resultRegistration', 'StudentController@registration')->name('resultRegistration');

    Route::put('/updateStudent', 'StudentController@update')->name('updateStudent');

    Route::put('/updateClass', 'ClassSchoolController@update')->name('updateClass');

    Route::get('/consult', 'StudentController@consult')->name('consult');

    Route::get('/listAll', 'StudentController@index')->name('listAll'); //->middleware(['auth']);

    Route::post('/result', 'StudentController@show')->name('listar');

    Route::get('/listClass', 'ClassSchoolController@index')->name('listClass');

    Route::get('/editConsClass', 'ClassSchoolController@cons_edit_class')->name('editConsClass');

    Route::get('/editingClass/{id}', 'ClassSchoolController@editing')->name('editingClass');

    Route::get('/consultClass', 'ClassSchoolController@consult')->name('consultClass');

    Route::post('/resultClass', 'ClassSchoolController@show')->name('resultClass');

    Route::post('/editClass', 'ClassSchoolController@edit')->name('editClass');

    Route::get('/pdfClass', 'PdfController@class')->name('pdfClass');

    Route::get('/pdfStudents', 'PdfController@student')->name('pdfStudents');

    Route::get('/pdfRegistrition', 'PdfController@pdf_registrition')->name('pdfRegistrition');

    Route::post('/pdfTeste', 'PdfController@pdfTeste')->name('pdfTeste');

    Route::get('/listUser', 'UserController@index')->name('listUser');

    // Route::get('/registerUser', 'UserController@create')->name('registerUser');

    Route::get('/deleteUser', 'UserController@delete')->name('deleteUser');

    Route::post('/editUser', 'UserController@edit')->name('editUser');

    Route::delete('/destroyUser', 'UserController@destroy')->name('destroyUser');

    Route::get('/editConsUser', 'UserController@cons_edit')->name('editConsUser');

    Route::get('/editingUser/{id}', 'UserController@editing')->name('editingUser');

    Route::get('/deletingUser/{id}', 'UserController@deleting')->name('deletingUser');

    // Route::post('/storeUser', 'UserController@store')->name('storeUser');

    Route::put('/updateUser', 'UserController@update')->name('updateUser');

    Route::get('/home', 'HomeController@index')->name('home');

});

Auth::routes();
