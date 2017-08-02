<?php

namespace App\Http\Controllers\Control;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index(){
        $services = DB::table('services')->orderBy('name', 'asc')->get();
        $categories = DB::table('services_category')->orderBy('name', 'asc')->get();
        $data = [
            'services'  => $services,
            'categories'  => $categories,
        ];
        return view('control.services.index', $data);
    }

    public function show($id){
        $service = DB::table('services')->where('id', $id)->first();
        $categories = DB::table('services_category')->orderBy('name', 'asc')->get();
        $data = [
            'service'  => $service,
            'categories'  => $categories,
        ];
        return view('control.services.show', $data);
    }

    public function store(Request $request){
        $status = 400;
        $data = (object)['message' => ''];
        try {
            $service = DB::table('services')->insert([
                'uid' => $request->input('uid', ''),
                'name' => $request->input('name', ''),
                'description' => $request->input('description', ''),
                'body' => $request->input('body', ''),
                'category_id' => $request->input('category_id', 1),
                'active' => $request->input('active', 1),
            ]);
            $status = 200;
        }catch(\Exception $e){
            $data->message = $e->getMessage();
        }
        return response()->json($data, $status);
    }

    public function update($id, Request $request){
        $status = 400;
        $data = (object)['message' => ''];

        try{
            $service = DB::table('services')
                ->where('id', $id)
                ->update([
                    'uid' => $request->input('uid', ''),
                    'name' => $request->input('name', ''),
                    'description' => $request->input('description', ''),
                    'body' => $request->input('body', ''),
                    'category_id' => $request->input('category_id', 1),
                    'active' => $request->input('active', 1),
                ])
            ;
            $status = 200;
        }catch(\Exception $e){
            $data->message = $e->getMessage();
        }
        return response()->json($data, $status);
    }
}
