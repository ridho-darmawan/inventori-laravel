<?php

use Illuminate\Support\Facades\Route;
use \Milon\Barcode\DNS2D;
use \Milon\Barcode\DNS1D;

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

// Route::get('/', function () {
//     $d = new DNS1D();
//     $nama = 'ridho darmawan';
//     $nim = '11551102852';
    
//     $d->setStorPath(__DIR__.'/cache/');
//     echo $d->getBarcodeHTML('9780691147727', 'EAN13');
// });


// Route::get('qr-code-g', function () {
//     return \QrCode::size(500)->format('png')->generate('cloudstarmohan.wordpress.com', public_path('images/qr.png'));
//     // return view('qrCode');
//   });

//   Route::get('/code', function () {
//     echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG('4', 'C39+') . '" alt="barcode"   />';


// });


// Route::get('qrcode', function () {
//     return QrCode::size(250)
//         ->backgroundColor(255, 255, 204)
//         ->generate('MyNotePaper');
// });
// Route::get('qrcode_blade', function () {
//     return view('qr_code');
// });

Route::get('/', function () {
   return view ('Auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Kategori

Route::resource('kategori', KategoriController::class);

// Supplier

Route::resource('supplier', SupplierController::class);
Route::get('/cetak',SupplierController::class . '@cetak');

// Ruang

Route::resource('ruang', RuangController::class);

// User

Route::resource('user', UserController::class);


// Barang

// Route::resource('barang', BarangController::class);
Route::get('/cetak',BarangController::class . '@cetak');

// Inventaris

Route::resource('inventaris', InventarisController::class);

Route::get('/cetak-barcode',InventarisController::class . '@cetakBarcode');
Route::get('/cetak-barcode-by-barang/{id}',InventarisController::class . '@cetakBarcodeByBarang');

// Barang Masuk

Route::resource('barang-masuk', BarangMasukController::class);

// Barang Keluar

Route::resource('barang-keluar', BarangKeluarController::class);


// Peminjaman

Route::resource('peminjaman', PeminjamanController::class);

Route::get('/get-data-inventaris/{ruang_id}', PeminjamanController::class . '@getDataBarangByRuang');
Route::get('/status-peminjaman/{id}', PeminjamanController::class . '@statusPeminjaman');



// Laporan

Route::get('/laporan-barang-masuk',LaporanController::class . '@laporanBarangMasuk');
Route::get('/cetak-all-barang-masuk',LaporanController::class . '@cetakAllBarangMasuk');
Route::get('/cetak-all-barang-keluar',LaporanController::class . '@cetakAllBarangKeluar');
Route::get('/cetak-barang-masuk-by-year',LaporanController::class . '@cetakBarangMasukByYear')->name('barangMasukByYear');
Route::get('/cetak-barang-keluar-by-year',LaporanController::class . '@cetakBarangKeluarByYear')->name('barangKeluarByYear');
Route::get('/laporan-barang-keluar',LaporanController::class . '@laporanBarangKeluar');
Route::get('/laporan-peminjaman',LaporanController::class . '@laporanPeminjaman');

Route::get('/cetak-all-peminjaman',LaporanController::class . '@cetakAllPeminjaman');
Route::get('/cetak-peminjaman-by-dipinjam',LaporanController::class . '@cetakPeminjamanByDiPinjam');

Route::get('/laporan-inventaris',LaporanController::class . '@laporanInventaris');
Route::get('/laporan-inventaris-by-ruang',LaporanController::class . '@laporanInventarisByRuang')->name('inventarisByRuang');

Route::get('/cetak-all-inventaris',LaporanController::class . '@laporanAllInventaris');


// Barang master

Route::resource('master-barang', MasterBarangController::class);

// Guru

Route::resource('guru', GuruController::class);
