<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function clients(){
        return view('site.sections.clients');
    }

    public function Newclient(Request $request){
        $client = Client::create();
        $uid = base_convert(time(),10,26);
        $client->regimen_de_ventas = $request->input('regimen-de-ventas', '');
        $client->regimen_fiscal = $request->input('regimen-fiscal', '');
        $client->comprobante_de_domicilio = aws($request, 'comprobante-de-domicilio', $uid);
        $client->constancia_situacion_fiscal = aws($request, 'constancia-situacion-fiscal', $uid);
        $client->save();

        $data['status'] = 'ok';
        return response()->json($data, 200);
    }
    private function aws(Request $request, $inputName, $uid){
        try {
            $image = $request->file($inputName);

            $new_image_name = $inputName.'.'.$image->getClientOriginalExtension();
            $s3 = Storage::disk('s3');
            $file_path = "/clientes/{$uid}/{$new_image_name}";
            $full_path = env('AWS_BASE') . $file_path;
            $s3->put($file_path, file_get_contents($image), 'public');

//            $data['status'] = 'Updated';
//            $data['src'] = $full_path;
            $status = 200;
            return $file_path;

        } catch (Exception $e) {
//            $data['message'] = 'Error';
            return '';
        }
    }
}
