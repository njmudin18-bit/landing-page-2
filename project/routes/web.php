<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company;
use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Application;

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

/** BERANDA */
Route::get('/', function () {
  $nama_halaman = "Beranda";
  $active       = "current-menu-item";
  $data         = Company::get_company_details();

  return View::make('welcome')
    ->with('nama_halaman', $nama_halaman)
    ->with('active', $active)
    ->with('data', $data);
});

/** PROFILE */
Route::get('/company-profile', function () {
  $data         = Company::get_company_details();
  $currenturl   = Route::current()->uri();
  $data_header  = Company::get_profile_headers($currenturl);
  $nama_halaman = $data_header->data->nama;
  $active       = "current-menu-item";

  return View::make('profile')
    ->with('nama_halaman', $nama_halaman)
    ->with('active', $active)
    ->with('data', $data);
});

/** VISI DAN MISI */
Route::get('/visi-dan-misi', function () {
  $data         = Company::get_company_details();
  $currenturl   = Route::current()->uri();
  $data_header  = Company::get_profile_headers($currenturl);
  $nama_halaman = $data_header->data->nama;
  $active       = "current-menu-item";

  return View::make('visi_misi')
    ->with('nama_halaman', $nama_halaman)
    ->with('active', $active)
    ->with('data', $data);
});

/** PELANGGAN */
Route::get('/our-customer', function () {
  $data         = Company::get_company_details();
  $currenturl   = Route::current()->uri();
  $data_header  = Company::get_profile_headers($currenturl);
  $nama_halaman = $data_header->data->nama;
  $active       = "current-menu-item";

  return View::make('pelanggan')
    ->with('nama_halaman', $nama_halaman)
    ->with('active', $active)
    ->with('data', $data);
});

/** MESIN */
Route::get('/our-machine', function () {
  $data         = Company::get_company_details();
  $currenturl   = Route::current()->uri();
  $data_header  = Company::get_profile_headers($currenturl);
  $nama_halaman = $data_header->data->nama;
  $active       = "current-menu-item";

  return View::make('mesin')
    ->with('nama_halaman', $nama_halaman)
    ->with('active', $active)
    ->with('data', $data);
});

/** RUBBER */
Route::get('/rubber', function () {
  $data         = Company::get_company_details();
  $currenturl   = Route::current()->uri();
  $data_header  = Company::get_profile_headers($currenturl);
  $nama_halaman = $data_header->data->nama;
  $active       = "current-menu-item";

  return View::make('produk')
    ->with('nama_halaman', $nama_halaman)
    ->with('active', $active)
    ->with('data', $data);
});

/** SILICONE */
Route::get('/silicone', function () {
  $data         = Company::get_company_details();
  $currenturl   = Route::current()->uri();
  $data_header  = Company::get_profile_headers($currenturl);
  $nama_halaman = $data_header->data->nama;
  $active       = "current-menu-item";

  return View::make('produk')
    ->with('nama_halaman', $nama_halaman)
    ->with('active', $active)
    ->with('data', $data);
});

/** PRODUK DETAIL */
Route::get('/view/{slug}', function (Request $request) {
  $data           = Company::get_company_details();
  $segments       = $request->segments();
  $slug           = $segments[1];
  $data_details   = Company::get_product_details($slug);
  //dd($data_details->data);
  $product_top_10 = Company::get_top_ten_products();
  $kat_produk     = Company::get_all_product_types();
  $kategori       = $kat_produk->data;
  $data_top_10    = $product_top_10->data;
  $nama_halaman   = $data_details->data->nama_produk;
  $active         = "current-menu-item";

  return View::make('produk_details')
    ->with('nama_halaman', $nama_halaman)
    ->with('product_top_10', $data_top_10)
    ->with('kategori', $kategori)
    ->with('data_details', $data_details)
    ->with('active', $active)
    ->with('data', $data);
});

/** KARIR */
Route::get('/career', function () {
  $data         = Company::get_company_details();
  $currenturl   = Route::current()->uri();
  $data_header  = Company::get_profile_headers($currenturl);
  $nama_halaman = $data_header->data->nama;
  $active       = "current-menu-item";

  return View::make('karir')
    ->with('nama_halaman', $nama_halaman)
    ->with('active', $active)
    ->with('data', $data);
});

/** KONTAK KAMI */
Route::get('/contact-us', function () {
  $data         = Company::get_company_details();
  $currenturl   = Route::current()->uri();
  $data_header  = Company::get_profile_headers($currenturl);
  $nama_halaman = $data_header->data->nama;
  $active       = "current-menu-item";

  return View::make('kontak')
    ->with('nama_halaman', $nama_halaman)
    ->with('active', $active)
    ->with('data', $data);
});

Route::get('/sliders-list', 'App\Http\Controllers\Company@get_all_sliders')->name('sliders.list');
Route::post('/sliders-list', 'App\Http\Controllers\Company@get_all_sliders')->name('sliders.list');

Route::get('/customers-list', 'App\Http\Controllers\Company@get_all_customers')->name('customers.list');
Route::post('/customers-list', 'App\Http\Controllers\Company@get_all_customers')->name('customers.list');

Route::get('/products-list', 'App\Http\Controllers\Company@get_mix_top_ten_products')->name('products.list');
Route::post('/products-list', 'App\Http\Controllers\Company@get_mix_top_ten_products')->name('products.list');
Route::post('/products-all', 'App\Http\Controllers\Company@get_all_products')->name('products.all');

Route::get('/services-list', 'App\Http\Controllers\Company@get_all_tags')->name('services.list');
Route::post('/services-list', 'App\Http\Controllers\Company@get_all_tags')->name('services.list');
Route::get('/sinopsis-list', 'App\Http\Controllers\Company@get_all_sinopsis')->name('sinopsis.list');
Route::post('/sinopsis-list', 'App\Http\Controllers\Company@get_all_sinopsis')->name('sinopsis.list');

Route::post('/machine-list', 'App\Http\Controllers\Company@get_all_machine')->name('machine.list');
Route::post('/company-profile', 'App\Http\Controllers\Company@get_company_profile')->name('company.profile');
Route::post('/pelanggan-list', 'App\Http\Controllers\Company@get_all_customers')->name('pelanggan.list');
Route::post('/visi-list', 'App\Http\Controllers\Company@get_all_visi')->name('visi.list');
Route::post('/misi-list', 'App\Http\Controllers\Company@get_all_misi')->name('misi.list');

Route::post('/contact-save', 'App\Http\Controllers\ContactController@save_pertanyaan')->name('contact.save');
Route::get('/sitemap.xml', 'App\Http\Controllers\SitemapController@sitemap')->name('sitemap');
