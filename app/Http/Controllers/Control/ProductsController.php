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
        $products = DB::table('products')->where('id', $id)->first();
        $data = [
            'products'  => $products,
        ];
        return view('control.products.show', $data);
    }
}
