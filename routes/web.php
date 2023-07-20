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

Route::get('/', [\App\Http\Controllers\index::class, 'index'])->name('index');
Route::get('/cekPesanan', [\App\Http\Controllers\cekPesanan::class, 'index'])->name('cekPesanan');
Route::get('/dashboard', [\App\Http\Controllers\dashboard::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/createTransaksi', [\App\Http\Controllers\dashboard::class, 'createTransaksi'])->middleware('auth')->name('createTransaksi');
Route::get('/TambahMember', [\App\Http\Controllers\MemberControll::class, 'addMember'])->middleware('auth')->name('TambahMember');

Route::get('/listTransaksi', [\App\Http\Controllers\Transaksi::class, 'listTransaksi'])->middleware('auth')->name('listTransaksi');
Route::get('/listMember', [\App\Http\Controllers\MemberControll::class, 'listMember'])->middleware('auth')->name('listMember');
Route::get('/printInvoce/{Invoice}', [\App\Http\Controllers\dashboard::class, 'printInvoce'])->middleware('auth')->name('printInvoce');
Route::post('/prosessAddMember',  [\App\Http\Controllers\MemberControll::class, 'prosesAddMember'])->middleware('auth')->name('prosessAddMember');
Route::get('/deleteMember/{nomerHp}', [\App\Http\Controllers\MemberControll::class, 'deleteMember'])->middleware('auth')->name('deleteMember');
Route::get('/listUser', [\App\Http\Controllers\dashboard::class, 'listUser'])->middleware('auth')->name('listUser');
Route::get('/deleteUser/{id}', [\App\Http\Controllers\dashboard::class, 'deleteUser'])->middleware('auth')->name('deleteUser');
Route::get('/addUser', [\App\Http\Controllers\dashboard::class, 'addUser'])->middleware('auth')->name('addUser');
Route::post('/prosessAddUser',  [\App\Http\Controllers\dashboard::class, 'prosesAddUser'])->middleware('auth')->name('prosesAddUser');
Route::get('/editUser/{id}', [\App\Http\Controllers\dashboard::class, 'editUser'])->middleware('auth')->name('editUser');
Route::post('/prosesEditUser',  [\App\Http\Controllers\dashboard::class, 'prosesEditUser'])->middleware('auth')->name('prosesEditUser');
Route::get('/editMember/{nomerHp}', [\App\Http\Controllers\MemberControll::class, 'editMember'])->middleware('auth')->name('editMember');
Route::post('/prosesEditMember',  [\App\Http\Controllers\MemberControll::class, 'prosesEditMember'])->middleware('auth')->name('prosesEditMember');
Route::post('/search',  [\App\Http\Controllers\dashboard::class, 'search'])->middleware('auth')->name('search');
Route::get('/transaksi/{Invoice}',  [\App\Http\Controllers\prosesTransaksi::class, 'transaksiGet'])->middleware('auth')->name('transaksi');
Route::get('/listTransaksiProses', [\App\Http\Controllers\prosesTransaksi::class, 'listTransaksiProses'])->middleware('auth')->name('listTransaksiProses');
Route::post('/transaksiProses',  [\App\Http\Controllers\prosesTransaksi::class, 'transaksiProses'])->middleware('auth')->name('transaksiProses');
Route::get('/deleteProses/{Invoice}', [\App\Http\Controllers\prosesTransaksi::class, 'deleteProses'])->middleware('auth')->name('deleteProses');
Route::post('/cek',  [\App\Http\Controllers\cekPesanan::class, 'cek'])->name('cek');
Route::get('/rubahStatus/{Invoice}',  [\App\Http\Controllers\prosesTransaksi::class, 'rubahStatus'])->name('rubahStatus');
Route::post('/prosesEditStatus',  [\App\Http\Controllers\prosesTransaksi::class, 'prosesEditStatus'])->name('prosesEditStatus');
Route::get('/info',  [\App\Http\Controllers\infoData::class, 'index'])->name('info');
Route::post('/infoPosts', [\App\Http\Controllers\infoData::class, 'store'])->name('infoPosts');
Route::get('/CreateInfo',  [\App\Http\Controllers\infoData::class, 'create'])->name('CreateInfo');
Route::get('/deleteInfo/{id}',  [\App\Http\Controllers\infoData::class, 'deleteInfo'])->name('deleteInfo');
Route::get('/editInfo/{id}',  [\App\Http\Controllers\infoData::class, 'editInfo'])->name('editInfo');
Route::post('/updatePosts', [\App\Http\Controllers\infoData::class, 'updatePosts'])->name('updatePosts');
Route::get('/setting',  [\App\Http\Controllers\settingPage::class, 'index'])->name('setting');
Route::post('/settingPost',  [\App\Http\Controllers\settingPage::class, 'settingPost'])->name('settingPost');
Route::post('/settingEdit',  [\App\Http\Controllers\settingPage::class, 'settingEdit'])->name('settingEdit');
Route::get('/pengumuman/{id}',  [\App\Http\Controllers\index::class, 'pengumuman'])->name('pengumuman');




Auth::routes();


