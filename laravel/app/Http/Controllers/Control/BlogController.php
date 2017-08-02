<?php

namespace App\Http\Controllers\Control;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $news = DB::table('news')->get();
        $data = [
            'posts'  => $news,
        ];
        return view('control.posts.index', $data);
    }

    public function show($id)
    {
        $post = DB::table('news')->where('id', $id)->first();
        $data = [
            'post'   => $post,
        ];
        return view('control.posts.show', $data);
    }


    public function store(Request $request){
        $status = 400;
        $data = (object)['message' => ''];
        $current_time = Carbon::now()->format('Y-m-d H:i:s');
        try {
            $post = DB::table('news')->insert([
                'uid' => $request->input('uid', ''),
                'title' => $request->input('title', ''),
                'description' => $request->input('description', ''),
                'body' => $request->input('body', ''),
                'img_thumb' => $request->input('img_thumb', ''),
                'active' => $request->input('active', 1),
                'datetime_created' => $current_time,
                'datetime_modified' => $current_time,
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

        $current_time = Carbon::now()->format('Y-m-d H:i:s');
        try{
            $post = DB::table('news')
                ->where('id', $id)
                ->update([
                    'uid' => $request->input('uid', ''),
                    'title' => $request->input('title', ''),
                    'description' => $request->input('description', ''),
                    'body' => $request->input('body', ''),
                    'img_thumb' => $request->input('img_thumb', ''),
                    'active' => $request->input('active', 1),
                    'datetime_modified' => $current_time,
                ])
            ;
            $status = 200;
        }catch(\Exception $e){
            $data->message = $e->getMessage();
        }
        return response()->json($data, $status);
    }
}
