<?php

namespace App\Http\Controllers;

use App\Client;
use App\Request;
use Illuminate\Http\Request;
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


    public function NewRequest(Request $request){
        $request = Request::create();
        $uid = base_convert(time(),10,26);
        $request->uid = $uid;

        $request->empresa = $request->input('', 'Sin definir');
        $request->rfc = $request->input('', 'Sin definir');
        $request->curp = $request->input('', 'Sin definir');
        $request->domicilio_fiscal = $request->input('', 'Sin definir');
        $request->colonia = $request->input('', 'Sin definir');
        $request->ciudad = $request->input('', 'Sin definir');
        $request->municipio = $request->input('', 'Sin definir');
        $request->estado = $request->input('', 'Sin definir');
        $request->cp = $request->input('', 'Sin definir');
        $request->telefono_1 = $request->input('', 'Sin definir');
        $request->telefono_2 = $request->input('', 'Sin definir');
        $request->celular = $request->input('', 'Sin definir');
        $request->correo_electronico = $request->input('', 'Sin definir');
        $request->apoderado_legal = $request->input('', 'Sin definir');
        $request->nombre_del_contacto = $request->input('', 'Sin definir');
        $request->consumo_anual_de_fertilizante = $request->input('', 'Sin definir');
        $request->referencia_1_banco = $request->input('', 'Sin definir');
        $request->referencia_1_sucursal = $request->input('', 'Sin definir');
        $request->referencia_1_ejecutivo_de_cuenta = $request->input('', 'Sin definir');
        $request->referencia_1_telefono_1 = $request->input('', 'Sin definir');
        $request->referencia_1_telefono_2 = $request->input('', 'Sin definir');
        $request->referencia_1_celular = $request->input('', 'Sin definir');
        $request->referencia_1_ciudad = $request->input('', 'Sin definir');
        $request->referencia_1_municipio = $request->input('', 'Sin definir');
        $request->referencia_1_estado = $request->input('', 'Sin definir');
        $request->referencia_2_banco = $request->input('', 'Sin definir');
        $request->referencia_2_sucursal = $request->input('', 'Sin definir');
        $request->referencia_2_ejecutivo_de_cuenta = $request->input('', 'Sin definir');
        $request->referencia_2_telefono_1 = $request->input('', 'Sin definir');
        $request->referencia_2_telefono_2 = $request->input('', 'Sin definir');
        $request->referencia_2_celular = $request->input('', 'Sin definir');
        $request->referencia_2_ciudad = $request->input('', 'Sin definir');
        $request->referencia_2_municipio = $request->input('', 'Sin definir');
        $request->referencia_2_estado = $request->input('', 'Sin definir');
        $request->empresa_1_rfc = $request->input('', 'Sin definir');
        $request->empresa_1_domicilio_fiscal = $request->input('', 'Sin definir');
        $request->empresa_1_cp = $request->input('', 'Sin definir');
        $request->empresa_1_ciudad = $request->input('', 'Sin definir');
        $request->empresa_1_municipio = $request->input('', 'Sin definir');
        $request->empresa_1_telefono_1 = $request->input('', 'Sin definir');
        $request->empresa_1_telefono_2 = $request->input('', 'Sin definir');
        $request->empresa_1_celular = $request->input('', 'Sin definir');
        $request->empresa_1_correo_electronico = $request->input('', 'Sin definir');
        $request->empresa_1_nombre_del_contacto = $request->input('', 'Sin definir');
        $request->empresa_2_rfc = $request->input('', 'Sin definir');
        $request->empresa_2_domicilio_fiscal = $request->input('', 'Sin definir');
        $request->empresa_2_cp = $request->input('', 'Sin definir');
        $request->empresa_2_ciudad = $request->input('', 'Sin definir');
        $request->empresa_2_municipio = $request->input('', 'Sin definir');
        $request->empresa_2_telefono_1 = $request->input('', 'Sin definir');
        $request->empresa_2_telefono_2 = $request->input('', 'Sin definir');
        $request->empresa_2_celular = $request->input('', 'Sin definir');
        $request->empresa_2_correo_electronico = $request->input('', 'Sin definir');
        $request->empresa_2_nombre_del_contacto = $request->input('', 'Sin definir');

        $request->acta_constitutiva = $this->aws($request, 'acta_constitutiva', $uid);
        $request->constancia_situacion_fiscal = $this->aws($request, 'constancia_situacion_fiscal', $uid);
        $request->poder_notarial = $this->aws($request, 'poder_notarial', $uid);
        $request->identificacion_oficial = $this->aws($request, 'identificacion_oficial', $uid);
        $request->comprobante_curp = $this->aws($request, 'comprobante_curp', $uid);
        $request->formato_32_d = $this->aws($request, 'formato_32_d', $uid);

        $request->save();

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
