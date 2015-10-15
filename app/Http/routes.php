<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'User', 'prefix' => 'api/v1'], function () {
    Route::resource('user', 'UserController', ['except' => ['create', 'edit']]);
});

Route::get('give-me-token', function () {
    return csrf_token();
});

Route::get('cetak-pdf', 'CetakPdfController@index');

Route::get('guzzle', function () {

//    $client = new \GuzzleHttp\Client();
//    $body = ['akun' => 'Akun Saya', 'kode_rekening' => '02'];
//    $response = $client->post('http://appsim.dev/api/v1/akun', [
//        'form_params' => $body,
//        'headers'     => [
//            'X-Requested-With' => 'XMLHttpRequest'
//        ]
//    ]);

//    echo $response->getBody();

    $client = new \GuzzleHttp\Client();
    $response = $client->get('http://demoapi.ubig.co.id/api/price.asmx/Iklan_Search?AccessKey_App=561cecc9096f2043c05b7736&Ngr=id&i_sts=555e8f32b05097100cb1741e&kywd=avanza&seo_kat=otomotif-dan-sepeda&seo_skat=mobil&seo_jns=&hrg_start=&hrg_end=&kond=&i_prop=&i_kot=&i_smbr=&t_psg_start=&t_psg_end=&Sort=&Limit=10&Page=1&Atribut=&Bhs=idn');

    $result = XML2JSON($response->getBody());

    $data = json_decode($result);

    return response()->json($data->pagging->Total);

});

function XML2JSON($xml)
{

    function normalizeSimpleXML($obj, &$result)
    {
        $data = $obj;
        if (is_object($data)) {
            $data = get_object_vars($data);
        }
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $res = null;
                normalizeSimpleXML($value, $res);
                if (($key == '@attributes') && ($key)) {
                    $result = $res;
                } else {
                    $result[$key] = $res;
                }
            }
        } else {
            $result = $data;
        }
    }

    normalizeSimpleXML(simplexml_load_string($xml), $result);

    return json_encode($result);
}