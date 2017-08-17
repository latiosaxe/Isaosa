<?php

namespace App\Http\Controllers\Control;

use \Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index(){
        $user_level = Auth::user()->level;
        if($user_level<=3){
            return redirect('/control/dashboard');
        }else{
            $categories = DB::table('products_category')->orderBy('parentcategory_id', 'asc')->get();
            $data = [
                'categories'  => $categories,
                'user_level' => $user_level
            ];
            return view('control.categories.index', $data);
        }
    }

    public function show($id){
        $user_level = Auth::user()->level;
        if($user_level<=3){
            return redirect('/control/dashboard');
        }else{
            $categories = DB::table('products_category')->orderBy('parentcategory_id', 'asc')->get();
            $category = DB::table('products_category')->where('id', $id)->first();
            $data = [
                'categories'  => $categories,
                'category'   => $category,
                'user_level' => $user_level
            ];
            return view('control.categories.show', $data);
        }
    }
    
    public function store(Request $request){
        $status = 400;
        $data = (object)['message' => ''];
        try {
            $post = DB::table('products_category')->insert([
                'uid' => $request->input('uid', ''),
                'name' => $request->input('name', ''),
                'parentcategory_id' => $request->input('parentcategory_id', 0),
                'position' => $request->input('position', 0),
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
            $post = DB::table('products_category')
                ->where('id', $id)
                ->update([
                    'uid' => $request->input('uid', ''),
                    'name' => $request->input('name', ''),
                    'parentcategory_id' => $request->input('parentcategory_id', 0),
                    'position' => $request->input('position', 0),
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
