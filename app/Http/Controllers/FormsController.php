<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use \Storage;

class FormsController extends Controller
{
    public function clients(){
        return view('site.sections.clients');
    }

    public function Newclient(Request $request){
        $client = Client::create();
        $uid = base_convert(time(),10,26);
        $client->uid = $uid;
        $client->regimen_de_ventas = $request->input('regimen-de-ventas', '');
        $client->regimen_fiscal = $request->input('regimen-fiscal', '');
        
        $client->razon_social = $request->input('razon_social', '');
        $client->rfc = $request->input('rfc', '');
        $client->curp = $request->input('curp', '');
        $client->titulo = $request->input('titulo', '');
        $client->complete_name = $request->input('complete_name', '');
        $client->job = $request->input('job', '');
        $client->tel = $request->input('tel', '');
        $client->cel = $request->input('cel', '');
        $client->email = $request->input('email', '');

        $client->addres_stret = $request->input('addres_stret', '');
        $client->addres_colonia = $request->input('addres_colonia', '');
        $client->addres_city = $request->input('addres_city', '');
        $client->addres_cp = $request->input('addres_cp', '');
        $client->addres_municipio = $request->input('addres_municipio', '');
        $client->addres_state = $request->input('addres_state', '');
        $client->addres_country = $request->input('addres_country', '');
        $client->addres_tel = $request->input('addres_tel', '');
        $client->addres_tel2 = $request->input('addres_tel2', '');
        $client->addres_cel = $request->input('addres_cel', '');
        $client->addres_website = $request->input('addres_website', '');
        $client->addres_email = $request->input('addres_email', '');
        $client->addres_contact = $request->input('addres_contact', '');

//        $client-> = $request->input('', '');

        $client->comprobante_de_domicilio = $this->aws($request, 'comprobante-de-domicilio', $uid);
        $client->constancia_situacion_fiscal = $this->aws($request, 'constancia-situacion-fiscal', $uid);

        $client->save();

        $data['status'] = 'ok';
        return response()->json($data, 200);
    }
    private function aws(Request $request, $inputName, $uid){
        try {
            $image = $request->file($inputName);
            $new_image_name = $inputName.'.'.$image->getClientOriginalExtension();
            $s3 = Storage::disk('s3');
            $file_path = "clientes/{$uid}/{$new_image_name}";
            $full_path = env('AWS_BASE') . $file_path;
            $s3->put($file_path, file_get_contents($image), 'public');

//            $data['status'] = 'Updated';
//            $data['src'] = $full_path;
            $status = 200;
            return $full_path;

        } catch (Exception $e) {
//            $data['message'] = 'Error';
            return '';
        }
    }
}
