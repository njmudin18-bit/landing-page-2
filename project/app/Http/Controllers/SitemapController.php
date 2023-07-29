<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
  public static function sitemap(Request $request)
  {
    $response_produk  = SitemapController::get_product_name();
    $result_produk    = json_decode($response_produk);
    $data_produk      = $result_produk->data;

    $response_jp      = SitemapController::get_product_type();
    $result_jp        = json_decode($response_jp);
    $data_jp          = $result_jp->data;

    return response()->view('sitemap', compact('data_produk', 'data_jp'))->header('Content-Type', 'text/xml');
  }

  private static function get_product_name()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => config('global.API_URL') . 'api/get_all_products_new',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=hrttcu7r5oupl08ocmcdiq8890dq6flf'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    
    return $response;
  }

  private static function get_product_type()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => config('global.API_URL') . 'api/get_all_product_types',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=9mf0oj91ktt7k18f7al4j797ekqlk4qs'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
  }
}
