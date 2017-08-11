<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('products')->where('active', 1)->orderBy('position', 'asc')->get();
        $productsRandom = DB::table('products')->inRandomOrder()->take(4)->get();

        $categories = DB::table('products_category')->get();

        $data = [
            'products'  => $products,
            'random' => $productsRandom,
            'categories' => $categories
        ];
        return view('site.sections.products', $data);
    }
}
