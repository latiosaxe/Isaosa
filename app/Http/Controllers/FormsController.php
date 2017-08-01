<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\NewRequest;
use \Storage;

class FormsController extends Controller
{
    public function clients(){
        return view('site.sections.clients');
    }

    public function NewClient(Request $request){
        $client = Client::create();
        $uid = base_convert(time(),10,26);
        $client->uid = $uid;
        $client->regimen_de_ventas = $request->input('regimen_de_ventas', 'Sin definir');
        $client->regimen_fiscal = $request->input('regimen_fiscal', 'Sin definir');
        
        $client->razon_social = $request->input('razon_social', 'Sin definir');
        $client->rfc = $request->input('rfc', 'Sin definir');
        $client->curp = $request->input('curp', 'Sin definir');
        $client->titulo = $request->input('titulo', 'Sin definir');
        $client->complete_name = $request->input('complete_name', 'Sin definir');
        $client->job = $request->input('job', 'Sin definir');
        $client->tel = $request->input('tel', 'Sin definir');
        $client->cel = $request->input('cel', 'Sin definir');
        $client->email = $request->input('email', 'Sin definir');

        $client->addres_stret = $request->input('addres_stret', 'Sin definir');
        $client->addres_colonia = $request->input('addres_colonia', 'Sin definir');
        $client->addres_city = $request->input('addres_city', 'Sin definir');
        $client->addres_cp = $request->input('addres_cp', 'Sin definir');
        $client->addres_municipio = $request->input('addres_municipio', 'Sin definir');
        $client->addres_state = $request->input('addres_state', 'Sin definir');
        $client->addres_country = $request->input('addres_country', 'Sin definir');
        $client->addres_tel = $request->input('addres_tel', 'Sin definir');
        $client->addres_tel2 = $request->input('addres_tel2', 'Sin definir');
        $client->addres_cel = $request->input('addres_cel', 'Sin definir');
        $client->addres_website = $request->input('addres_website', 'Sin definir');
        $client->addres_email = $request->input('addres_email', 'Sin definir');
        $client->addres_contact = $request->input('addres_contact', 'Sin definir');

        $client->comprobante_de_domicilio = $this->aws($request, 'comprobante-de-domicilio', $uid);
        $client->constancia_situacion_fiscal = $this->aws($request, 'constancia-situacion-fiscal', $uid);

        $client->save();

        $data['status'] = 'ok';
        return response()->json($data, 200);
    }

    public function request(){
        return view('site.sections.request');
    }


    public function NewRequest(Request $request2){
        $newRequest = NewRequest::create();
        $uid = base_convert(time(),10,26);
        $newRequest->uid = $uid;

        dd($request2);

        $newRequest->empresa = $request2->input('empresa', 'Sin definir');
        $newRequest->rfc = $request2->input('rfc', 'Sin definir');
        $newRequest->curp = $request2->input('curp', 'Sin definir');
        $newRequest->domicilio_fiscal = $request2->input('domicilio_fiscal', 'Sin definir');
        $newRequest->colonia = $request2->input('colonia', 'Sin definir');
        $newRequest->ciudad = $request2->input('ciudad', 'Sin definir');
        $newRequest->municipio = $request2->input('municipio', 'Sin definir');
        $newRequest->estado = $request2->input('estado', 'Sin definir');
        $newRequest->cp = $request2->input('cp', 'Sin definir');
        $newRequest->telefono_1 = $request2->input('telefono_1', 'Sin definir');
        $newRequest->telefono_2 = $request2->input('telefono_2', 'Sin definir');
        $newRequest->celular = $request2->input('celular', 'Sin definir');
        $newRequest->correo_electronico = $request2->input('correo_electronico', 'Sin definir');
        $newRequest->apoderado_legal = $request2->input('apoderado_legal', 'Sin definir');
        $newRequest->nombre_del_contacto = $request2->input('nombre_del_contacto', 'Sin definir');
        $newRequest->consumo_anual_de_fertilizante = $request2->input('consumo_anual_de_fertilizante', 'Sin definir');
        $newRequest->referencia_1_banco = $request2->input('referencia_1_banco', 'Sin definir');
        $newRequest->referencia_1_sucursal = $request2->input('referencia_1_sucursal', 'Sin definir');
        $newRequest->referencia_1_ejecutivo_de_cuenta = $request2->input('referencia_1_ejecutivo_de_cuenta', 'Sin definir');
        $newRequest->referencia_1_telefono_1 = $request2->input('referencia_1_telefono_1', 'Sin definir');
        $newRequest->referencia_1_telefono_2 = $request2->input('referencia_1_telefono_2', 'Sin definir');
        $newRequest->referencia_1_celular = $request2->input('referencia_1_celular', 'Sin definir');
        $newRequest->referencia_1_ciudad = $request2->input('referencia_1_ciudad', 'Sin definir');
        $newRequest->referencia_1_municipio = $request2->input('referencia_1_municipio', 'Sin definir');
        $newRequest->referencia_1_estado = $request2->input('referencia_1_estado', 'Sin definir');
        $newRequest->referencia_2_banco = $request2->input('referencia_2_banco', 'Sin definir');
        $newRequest->referencia_2_sucursal = $request2->input('referencia_2_sucursal', 'Sin definir');
        $newRequest->referencia_2_ejecutivo_de_cuenta = $request2->input('referencia_2_ejecutivo_de_cuenta', 'Sin definir');
        $newRequest->referencia_2_telefono_1 = $request2->input('referencia_2_telefono_1', 'Sin definir');
        $newRequest->referencia_2_telefono_2 = $request2->input('referencia_2_telefono_2', 'Sin definir');
        $newRequest->referencia_2_celular = $request2->input('referencia_2_celular', 'Sin definir');
        $newRequest->referencia_2_ciudad = $request2->input('referencia_2_ciudad', 'Sin definir');
        $newRequest->referencia_2_municipio = $request2->input('referencia_2_municipio', 'Sin definir');
        $newRequest->referencia_2_estado = $request2->input('referencia_2_estado', 'Sin definir');
        $newRequest->empresa_1_rfc = $request2->input('empresa_1_rfc', 'Sin definir');
        $newRequest->empresa_1_domicilio_fiscal = $request2->input('empresa_1_domicilio_fiscal', 'Sin definir');
        $newRequest->empresa_1_cp = $request2->input('empresa_1_cp', 'Sin definir');
        $newRequest->empresa_1_ciudad = $request2->input('empresa_1_ciudad', 'Sin definir');
        $newRequest->empresa_1_municipio = $request2->input('empresa_1_municipio', 'Sin definir');
        $newRequest->empresa_1_telefono_1 = $request2->input('empresa_1_telefono_1', 'Sin definir');
        $newRequest->empresa_1_telefono_2 = $request2->input('empresa_1_telefono_2', 'Sin definir');
        $newRequest->empresa_1_celular = $request2->input('empresa_1_celular', 'Sin definir');
        $newRequest->empresa_1_correo_electronico = $request2->input('empresa_1_correo_electronico', 'Sin definir');
        $newRequest->empresa_1_nombre_del_contacto = $request2->input('empresa_1_nombre_del_contacto', 'Sin definir');
        $newRequest->empresa_2_rfc = $request2->input('empresa_2_rfc', 'Sin definir');
        $newRequest->empresa_2_domicilio_fiscal = $request2->input('empresa_2_domicilio_fiscal', 'Sin definir');
        $newRequest->empresa_2_cp = $request2->input('empresa_2_cp', 'Sin definir');
        $newRequest->empresa_2_ciudad = $request2->input('empresa_2_ciudad', 'Sin definir');
        $newRequest->empresa_2_municipio = $request2->input('empresa_2_municipio', 'Sin definir');
        $newRequest->empresa_2_telefono_1 = $request2->input('empresa_2_telefono_1', 'Sin definir');
        $newRequest->empresa_2_telefono_2 = $request2->input('empresa_2_telefono_2', 'Sin definir');
        $newRequest->empresa_2_celular = $request2->input('empresa_2_celular', 'Sin definir');
        $newRequest->empresa_2_correo_electronico = $request2->input('empresa_2_correo_electronico', 'Sin definir');
        $newRequest->empresa_2_nombre_del_contacto = $request2->input('empresa_2_nombre_del_contacto', 'Sin definir');

        $newRequest->acta_constitutiva = $this->aws($request2, 'acta_constitutiva', $uid);
        $newRequest->constancia_situacion_fiscal = $this->aws($request2, 'constancia_situacion_fiscal', $uid);
        $newRequest->poder_notarial = $this->aws($request2, 'poder_notarial', $uid);
        $newRequest->identificacion_oficial = $this->aws($request2, 'identificacion_oficial', $uid);
        $newRequest->comprobante_curp = $this->aws($request2, 'comprobante_curp', $uid);
        $newRequest->formato_32_d = $this->aws($request2, 'formato_32_d', $uid);

        $newRequest->save();

        $data['status'] = 'ok';
        $data['uid'] = $uid;
        return response()->json($data, 200);
    }

    private function aws(Request $request, $inputName, $uid){
        try {
            $image = $request->file($inputName);
            $full_path = '';
            if($image==null){
                $full_path = 'Sin arichivo';
            }else{
                $new_image_name = $inputName.'.'.$image->getClientOriginalExtension();
                $s3 = Storage::disk('s3');
                $file_path = "clientes/{$uid}/{$new_image_name}";
                $full_path = env('AWS_BASE') . $file_path;
                $s3->put($file_path, file_get_contents($image), 'public');

//            $data['status'] = 'Updated';
//            $data['src'] = $full_path;
            }
            $status = 200;
            return $full_path;

        } catch (Exception $e) {
//            $data['message'] = 'Error';
            return '';
        }
    }

}
