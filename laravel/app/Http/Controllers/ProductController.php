<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('products')->where('active', 1)->orderBy('position', 'asc')->get();
        $productsRandom = DB::table('products')->inRandomOrder()->take(4)->get();

        $categories = DB::table('products_category')->where('active', 1)->orderBy('position', 'asc')->get();
        $relations = DB::table('products_files')->where('active', 1)->orderBy('position', 'asc')->get();

        foreach($products as $product){
//            $product->file = array();
//            $product->file_type = array();
            foreach ($relations as $relation){
                $elementsOBJ = (object)[];
                if($product->id == $relation->product_id){
                    $request = DB::table('files')->where('id', $relation->file_id )->first();
                    $elementsOBJ->file = $request->file;
                    $elementsOBJ->name = $request->name;
                    $elementsOBJ->file_type = $relation->icon;
                    $product->files[] = $elementsOBJ;
                }
            }
            if(isset($product->files)){

            }else{
                $product->files = null;
            }
//            if(count($product->files) == 0){
//                $product->hasfiles = null;
//            }else{
//                $product->file = '';
//                $product->file_type = '';

//            }
//            dd( count($product->files) > 0 );
        }
//        dd($products);

        $data = [
            'products'  => $products,
            'random' => $productsRandom,
            'categories' => $categories
        ];
        return view('site.sections.products', $data);
    }
}
