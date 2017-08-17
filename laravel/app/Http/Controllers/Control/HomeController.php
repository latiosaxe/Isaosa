<?php


namespace App\Http\Controllers\Control;

use \Storage;
use \Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Home;

class HomeController extends Controller
{
    public function index(){
        $user_level = Auth::user()->level;
        if($user_level<=3){
            return redirect('/control/dashboard');
        }else{
            $cards = Home::all();
            $data = [
                'cards'  => $cards,
                'user_level' => $user_level
            ];
            return view('control.home.index', $data);
        }
    }

    public function show($id){
        $user_level = Auth::user()->level;
        if($user_level<=3){
            return redirect('/control/dashboard');
        }else{
            $card = Home::where('id', $id)->first();
            $data = [
                'card' => $card,
                'user_level' => $user_level
            ];
            return view('control.home.show', $data);
        }
    }


    public function store(Request $request){
        $status = 400;
        $data = (object)['message' => ''];

        try {
            $title = $request->input('title', '');
            $slug = str_slug($title);

            $cardData = [
                'title' => $title,
                'description' => $request->input('description', ''),
                'link' => $request->input('link', ''),
                'position' => $request->input('position', 0),
                'active' => $request->input('active', 0),
            ];
            $card = Home::create($cardData);

            if($request->input('image')){ $card->image = $this->aws($request, 'image', $slug); }

            $card->save();

            $status = 200;
        }catch(\Exception $e){
            $data->message = $e->getMessage();
        }
        return response()->json($data, $status);
    }

    public function fakeUpdate($id, Request $request){
        $status = 400;
        $data = (object)['message' => ''];
        try{
            $card = Home::where('id', $id)->first();

            $title = $request->input('title', '');
            $slug = str_slug($title);

            $card->title = $title;
            $card->description = $request->input('description', '');
            $card->link = $request->input('link', '');
            $card->position = $request->input('position', 1);
            $card->active = $request->input('active', 1);

            if($request->input('image')){ $card->image = $this->aws($request, 'image', $slug); }

            $card->save();
            $status = 200;
        }catch(\Exception $e){
            $data->message = $e->getMessage();
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
                $file_path = "inicio/$id/{$new_image_name}";
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
