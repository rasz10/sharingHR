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

Route::get('/', function () {
    $title="Login";
    return view('login.index',compact('title'));
});

Route::group(['middleware' => ['auth:web']], function () {
        Route::resource('/', 'Ctrl_home');
        //logout
        Route::get('/beranda', 'Ctrl_home@index');
        Route::get('/beranda-sdm', 'Ctrl_home@index');
        Route::get('/logout', 'Ctrl_home@logout');

        //kodeakses
        Route::get('/kodeakses', 'Ctrl_kodeakses@index');
        Route::post('/kodeakses/donew', 'Ctrl_kodeakses@donew');
        Route::get('/kodeakses/edit/{id}', 'Ctrl_kodeakses@edit');
        Route::post('/kodeakses/doedit', 'Ctrl_kodeakses@doedit');
        Route::get('/kodeakses/delete/{id}', 'Ctrl_kodeakses@del');
        //kodeakses

        //download
        Route::get('/download/{id}', 'Ctrl_download@index');
        //download

        //upload-dokumen
        Route::get('/upload-dokumen', 'Ctrl_uploaddokumen@index');
        Route::post('/upload-dokumen/donew', 'Ctrl_uploaddokumen@donew');
        Route::get('/upload-dokumen/edit/{id}', 'Ctrl_uploaddokumen@edit');
        Route::post('/upload-dokumen/doedit', 'Ctrl_uploaddokumen@doedit');
        Route::get('/upload-dokumen/delete/{id}', 'Ctrl_uploaddokumen@del');
        //upload-dokumen

        // //verifikasicuti
        // Route::get('/approvalcuti', 'backend\Ctrl_approvalcuti@index');
        // //verifikasicuti

        // //sisacuti
        // Route::get('/sisacuti', 'backend\Ctrl_sisacuti@index');
        // //sisacuti

        // //karyawan
        // Route::get('/karyawan', 'backend\Ctrl_karyawan@index');
        // Route::post('/karyawan/donew', 'backend\Ctrl_karyawan@donew');
        // Route::get('/karyawan/edit/{id}', 'backend\Ctrl_karyawan@edit');
        // Route::post('/karyawan/doedit', 'backend\Ctrl_karyawan@doedit');
        // Route::get('/karyawan/delete/{id}', 'backend\Ctrl_karyawan@del');
        // //karyawan

        // //departemen
        // Route::get('/departemen', 'backend\Ctrl_departemen@index');
        // Route::post('/departemen/donew', 'backend\Ctrl_departemen@donew');
        // Route::get('/departemen/edit/{id}', 'backend\Ctrl_departemen@edit');
        // Route::post('/departemen/doedit', 'backend\Ctrl_departemen@doedit');
        // Route::get('/departemen/delete/{id}', 'backend\Ctrl_departemen@del');
        // //departemen

        // //jabatan
        // Route::get('/jabatan', 'backend\Ctrl_jabatan@index');
        // Route::post('/jabatan/donew', 'backend\Ctrl_jabatan@donew');
        // Route::get('/jabatan/edit/{id}', 'backend\Ctrl_jabatan@edit');
        // Route::post('/jabatan/doedit', 'backend\Ctrl_jabatan@doedit');
        // Route::get('/jabatan/delete/{id}', 'backend\Ctrl_jabatan@del');
        // //jabatan

        // //plafoncuti
        // Route::get('/plafoncuti', 'backend\Ctrl_plafoncuti@index');
        // Route::post('/plafoncuti/donew', 'backend\Ctrl_plafoncuti@donew');
        // Route::get('/plafoncuti/edit/{id}', 'backend\Ctrl_plafoncuti@edit');
        // Route::post('/plafoncuti/doedit', 'backend\Ctrl_plafoncuti@doedit');
        // Route::get('/plafoncuti/delete/{id}', 'backend\Ctrl_plafoncuti@del');
        // //plafoncuti

        // //cutibersama
        // Route::get('/cutibersama', 'backend\Ctrl_cutibersama@index');
        // Route::post('/cutibersama/donew', 'backend\Ctrl_cutibersama@donew');
        // Route::get('/cutibersama/edit/{id}', 'backend\Ctrl_cutibersama@edit');
        // Route::post('/cutibersama/doedit', 'backend\Ctrl_cutibersama@doedit');
        // Route::get('/cutibersama/delete/{id}', 'backend\Ctrl_cutibersama@del');
        // //cutibersama

        // //liburnasional
        // Route::get('/liburnasional', 'backend\Ctrl_cutibersama@indexlibur');
        // Route::post('/liburnasional/donew', 'backend\Ctrl_cutibersama@donewlibur');
        // Route::get('/liburnasional/edit/{id}', 'backend\Ctrl_cutibersama@editlibur');
        // Route::post('/liburnasional/doedit', 'backend\Ctrl_cutibersama@doeditlibur');
        // Route::get('/liburnasional/delete/{id}', 'backend\Ctrl_cutibersama@dellibur');
        // //liburnasional

        // //laporan
        // Route::get('/laporan', 'backend\Ctrl_laporan@index');
        // Route::post('/laporan/donew', 'backend\Ctrl_laporan@donew');
        // Route::get('/laporan/edit/{id}', 'backend\Ctrl_laporan@edit');
        // Route::post('/laporan/doedit', 'backend\Ctrl_laporan@doedit');
        // Route::get('/laporan/delete/{id}', 'backend\Ctrl_laporan@del');
        // //laporan

    });

    //login 
    Route::get('/login', [ 'as' => 'login', 'uses' => 'Ctrl_home@index']);
    Route::post('/login', 'Ctrl_home@Login');