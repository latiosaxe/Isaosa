<?php

namespace App\Http\Controllers\Control;

use \Storage;
use \Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index(){
        $user_level = Auth::user()->level;
        if($user_level<=3){
            return redirect('/control/dashboard');
        }else{
            $categories = DB::table('products_category')->orderBy('parentcategory_id', 'asc')->get();
            $products = DB::table('products')->orderBy('name', 'asc')->get();
            $file = '';
            $data = [
                'products'  => $products,
                'categories'  => $categories,
                'user_level' => $user_level,
                'file' => $file
            ];
            return view('control.products.index', $data);
        }
    }

    public function show($id){
        $user_level = Auth::user()->level;
        if($user_level<=3){
            return redirect('/control/dashboard');
        }else{
            $categories = DB::table('products_category')->orderBy('parentcategory_id', 'asc')->get();
            $product = DB::table('products')->where('id', $id)->first();
            $data = [
                'product'  => $product,
                'categories'  => $categories,
                'user_level' => $user_level
            ];
            return view('control.products.show', $data);
        }
    }

    public function store(Request $request){
        $status = 400;
        $data = (object)['message' => ''];


        $name = $request->input('name', '');
        $slug = str_slug($name);
        try {
            $product = DB::table('products')->insert([
                'uid' => $request->input('uid', ''),
                'name' => $name,
                'formula' => $request->input('formula', ''),
                'description' => $request->input('description', ''),
                'body' => $request->input('body', ''),
                'characteristics' => $request->input('characteristics', ''),

                'table_1' => $request->input('table_1', ''),
                'table_2' => $request->input('table_2', ''),
                'table_3' => $request->input('table_3', ''),
                'table_4' => $request->input('table_4', ''),
                'table_5' => $request->input('table_5', ''),
                'table_6' => $request->input('table_6', ''),
                'table_7' => $request->input('table_7', ''),
                'table_8' => $request->input('table_8', ''),
                'table_9' => $request->input('table_9', ''),
                'table_10' => $request->input('table_10', ''),
                'table_1_copy' => $request->input('table_1_copy', ''),
                'table_2_copy' => $request->input('table_2_copy', ''),
                'table_3_copy' => $request->input('table_3_copy', ''),
                'table_4_copy' => $request->input('table_4_copy', ''),
                'table_5_copy' => $request->input('table_5_copy', ''),
                'table_6_copy' => $request->input('table_6_copy', ''),
                'table_7_copy' => $request->input('table_7_copy', ''),
                'table_8_copy' => $request->input('table_8_copy', ''),
                'table_9_copy' => $request->input('table_9_copy', ''),
                'table_10_copy' => $request->input('table_10_copy', ''),

                'category_id' => $request->input('category_id', 1),
                'position' => $request->input('position', 0),
                'active' => $request->input('active', 1),
            ]);
            $status = 200;
        }catch(\Exception $e){
            $data->message = $e->getMessage();
        }
        return response()->json($data, $status);
    }


    public function fakeUpload($id, Request $request){
        $status = 400;
        $name = $request->input('name', '');
        $slug = str_slug($name);


        $updates = [
            'uid' => $request->input('uid', ''),
            'name' => $name,
            'formula' => $request->input('formula', ''),
            'description' => $request->input('description', ''),
            'body' => $request->input('body', ''),
            'characteristics' => $request->input('characteristics', ''),

            'table_1' => $request->input('table_1', ''),
            'table_2' => $request->input('table_2', ''),
            'table_3' => $request->input('table_3', ''),
            'table_4' => $request->input('table_4', ''),
            'table_5' => $request->input('table_5', ''),
            'table_6' => $request->input('table_6', ''),
            'table_7' => $request->input('table_7', ''),
            'table_8' => $request->input('table_8', ''),
            'table_9' => $request->input('table_9', ''),
            'table_10' => $request->input('table_10', ''),
            'table_1_copy' => $request->input('table_1_copy', ''),
            'table_2_copy' => $request->input('table_2_copy', ''),
            'table_3_copy' => $request->input('table_3_copy', ''),
            'table_4_copy' => $request->input('table_4_copy', ''),
            'table_5_copy' => $request->input('table_5_copy', ''),
            'table_6_copy' => $request->input('table_6_copy', ''),
            'table_7_copy' => $request->input('table_7_copy', ''),
            'table_8_copy' => $request->input('table_8_copy', ''),
            'table_9_copy' => $request->input('table_9_copy', ''),
            'table_10_copy' => $request->input('table_10_copy', ''),

            'category_id' => $request->input('category_id', 1),
            'position' => $request->input('position', 0),
            'active' => $request->input('active', 1),
        ];


        try{
            $product = DB::table('products')
                ->where('id', $id)
                ->update($updates)
            ;


            if($request->input('img_thumb')){ $updates['img_thumb'] = $this->aws($request, 'img_thumb', $slug); }
            if($request->input('img')){ $updates['img'] = $this->aws($request, 'img', $slug); }


            if($request->input('file_ficha')){
                $uid = base_convert(time(),10,26);
                $fileURl = $this->aws($request, 'file_ficha', $slug);
                $ficha = DB::table('files')->insert([
                    'uid' => $uid,
                    'name' => $request->input('file_ficha-name','Ficha '.$name),
                    'file' => $fileURl
                ]);
                $fichaRelation = DB::table('products_files')->insert([
                    'file_id' => DB::getPdo()->lastInsertId(),
                    'product_id' => $id,
                    'icon' => 'ficha',
                    'position' => 1,
                    'active' => 1,
                ]);
            }
            if($request->input('file_folleto')){
                $uid = base_convert(time(),10,26);
                $fileURl = $this->aws($request, 'file_folleto', $slug);
                $ficha = DB::table('files')->insert([
                    'uid' => $uid,
                    'name' => $request->input('file_folleto-name','Folleto '.$name),
                    'file' => $fileURl
                ]);
                $fichaRelation = DB::table('products_files')->insert([
                    'file_id' => DB::getPdo()->lastInsertId(),
                    'product_id' => $id,
                    'icon' => 'folleto',
                    'position' => 1,
                    'active' => 1,
                ]);
            }



            $data['status'] = 'ok';
            $status = 200;
        }catch(\Exception $e){
            $data['message'] = $e->getMessage();
        }
        return response()->json($data, $status);
    }



    private function aws(Request $request, $inputName, $id){
        try {
            $image = $request->file($inputName);
            $full_path = '';
            if($image==null){
                $full_path = 'Sin archivo';
            }else{
                $new_image_name = $inputName.'.'.$image->getClientOriginalExtension();
                $s3 = Storage::disk('s3');
                $file_path = "productos/$id/{$new_image_name}";
                $full_path = env('AWS_BASE') . $file_path;
                $s3->put($file_path, file_get_contents($image), 'public');
            }
            $status = 200;
            return $full_path;
        } catch (Exception $e) {
            return '';
        }
    }

}
