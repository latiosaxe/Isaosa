<?php

namespace App\Http\Controllers\Control;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index(){
        $categories = DB::table('products_category')->orderBy('parentcategory_id', 'asc')->get();
        $products = DB::table('products')->orderBy('name', 'asc')->get();
        $data = [
            'products'  => $products,
            'categories'  => $categories,
        ];
        return view('control.products.index', $data);
    }

    public function show($id){
        $categories = DB::table('products_category')->orderBy('parentcategory_id', 'asc')->get();
        $product = DB::table('products')->where('id', $id)->first();
        $data = [
            'product'  => $product,
            'categories'  => $categories,
        ];
        return view('control.products.show', $data);
    }

    public function store(Request $request){
        $status = 400;
        $data = (object)['message' => ''];
        try {
            $product = DB::table('products')->insert([
                'uid' => $request->input('uid', ''),
                'name' => $request->input('name', ''),
                'formula' => $request->input('formula', ''),
                'description' => $request->input('description', ''),
                'body' => $request->input('body', ''),
                'characteristics' => $request->input('characteristics', ''),
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
            $product = DB::table('products')
                ->where('id', $id)
                ->update([
                    'uid' => $request->input('uid', ''),
                    'name' => $request->input('name', ''),
                    'formula' => $request->input('formula', ''),
                    'description' => $request->input('description', ''),
                    'body' => $request->input('body', ''),
                    'characteristics' => $request->input('characteristics', ''),
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
