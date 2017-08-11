<?php

namespace App\Http\Controllers\Control;


use \Storage;
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
        $title = $request->input('title', '');
        $slug = str_slug($title);
        try {
            $post = DB::table('news')->insert([
                'uid' => $request->input('uid', ''),
                'title' => $title,
                'description' => $request->input('description', ''),
                'body' => $request->input('body', ''),
                'active' => $request->input('active', 1),
                'datetime_created' => $current_time,
                'datetime_modified' => $current_time,
            ]);


            if($request->input('img_thumb')){ $post->img_thumb = $this->aws($request, 'img_thumb', $slug); }

            $status = 200;
        }catch(\Exception $e){
            $data->message = $e->getMessage();
        }
        return response()->json($data, $status);
    }

    public function fakeUpload($id, Request $request){
        $status = 400;
        $title = $request->input('title', '');
        $slug = str_slug($title);
        $current_time = Carbon::now()->format('Y-m-d H:i:s');

        $updates = [
            'uid' => $request->input('uid', ''),
            'title' => $title,
            'description' => $request->input('description', ''),
            'body' => $request->input('body', ''),
            'active' => $request->input('active', 1),
            'datetime_modified' => $current_time,
        ];

        if($request->input('img_thumb')){ $updates['img_thumb'] = $this->aws($request, 'img_thumb', $slug); }

        try{
            $new = DB::table('news')
                ->where('id', $id)
                ->update($updates);

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
                $file_path = "noticias/$id/{$new_image_name}";
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
