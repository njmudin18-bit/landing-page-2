<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Rules\ReCaptcha;

class ContactController extends Controller
{
  public static function save_pertanyaan(Request $request)
  {
    $input_request = $request->input();
    $validator = Validator::make($input_request, [
      'subject' => 'required',
      'name'    => 'required',
      'email'   => 'required|email',
      'message' => 'required',
      'g-recaptcha-response' => ['required', new ReCaptcha]
    ]);

    if ($validator->fails()) {
      return response()->json($validator->errors());
    }
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => config('global.API_URL') . 'api/save_pertanyaan',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(
        'name'      => ucwords($input_request['name']),
        'email'     => strtolower($input_request['email']),
        'subject'   => ucfirst($input_request['subject']),
        'message'   => ucfirst($input_request['message'])
      ),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic bmptdWRpbkBvbWFzLW1mZy5jb206NThhZmVjYWRiNDFkNzZiNjhlNTY3YzE4OWMxYThlODBYWFg=',
        'Cookie: ci_session=m8v191d54sq16jequ42o0tcf5hfach9c'
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    echo $response;
  }
}
