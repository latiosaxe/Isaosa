<?php

namespace App\Http\Controllers\API;

use App;
use App\Gallery;
use App\Img;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Storage;
use \Image;

class AdminController extends Controller
{
    private $image_mime_types = ['image/jpg', 'image/jpeg', 'image/png'];

    public function uploadImage(Request $request){
        $status = 400;
        $data = (object)['message' => ''];
        try {
            if(!$request->hasFile('file')){
                $data->message = 'No tiene archivo';
            }

            $mime = $request->file('file')->getMimeType();
            if( !in_array($mime,$this->image_mime_types) ){
                $data->message = 'El archivo no es una imagen';
            }

            if($data->message == ''){
                $image = $request->file('file');
                $image_temp_path = $image->getRealPath();
                $imageFileName = time().mt_rand(1000, 9999).'.'.$image->getClientOriginalExtension();
                $s3 = \Storage::disk('s3');
                $filePath = '/default/' . $imageFileName;
                $image = Image::make($image_temp_path);

                switch($request->input('type', '')){
                    case 'gallery-match':
                        $gallery_id = (int)$request->input('id', 0);
                        $gallery = Gallery::findOrFail($gallery_id);

                        $filePath = '/galeria-de-partidos/'. $gallery_id ."/". $imageFileName;
                        $imgData = [
                            'url' => ENV('URL_STORAGE_IMAGE').$filePath,
                            'title' => '',
                        ];
                        $img = Img::create($imgData);
                        $gallery->images()->attach($img->id);

                        $image->resize(1200, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->stream();
                        break;

                    case 'gallery-post':
                        $gallery_id = (int)$request->input('id', 0);
                        $gallery = Gallery::findOrFail($gallery_id);

                        $filePath = '/notas/'. $gallery_id ."/". $imageFileName;
                        $imgData = [
                            'url' => ENV('URL_STORAGE_IMAGE').$filePath,
                            'title' => '',
                        ];
                        $img = Img::create($imgData);
                        $gallery->images()->attach($img->id);

                        $image->resize(1200, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->stream();
                        break;

                    case 'featured-image':
                        $featured_id = (int)$request->input('id', 1);
                        $filePath = '/featured/'. $featured_id ."/". $imageFileName;
                        $image->resize(1200, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->stream();

                        $featured = Featured::findOrFail($featured_id);
                        $featured->image =  ENV('URL_STORAGE_IMAGE').$filePath;
                        $featured->save();
                        break;

                    case 'stadium-image':
                        $stadium_id = (int)$request->input('id', 0);
                        $filePath = '/stadiums/'. $stadium_id ."/". $imageFileName;
                        $image->resize(1200, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->stream();

                        $stadium = Stadium::findOrFail($stadium_id);
                        $stadium->image =  ENV('URL_STORAGE_IMAGE').$filePath;
                        $stadium->save();
                        break;

                    default: break;
                };

                $data->image = ENV('URL_STORAGE_IMAGE').$filePath;
                $s3->put($filePath, $image->__toString(), 'public');
                $status = 200;
            }
        }catch(\Exception $e){
            $data->message = $e->getMessage();
        }
        return response()->json($data, $status);
    }

    public function deleteImage(Request $request, $id){
        $status = 400;
        $data = (object)['message' => ''];
        try {
            $gallery_id = $request->input('gallery_id');
            if($gallery_id){
                $gallery = Gallery::findOrFail($gallery_id);
                $gallery->images()->detach($id);
            }

            $img = Img::find($id);
            $path = str_replace(ENV('URL_STORAGE_IMAGE'), '', $img->url);
            Storage::disk('s3')->delete($path);
            $img->delete();
            $status = 200;
        }catch(\Exception $e){
            $data->message = $e->getMessage();
        }
        return response()->json($data, $status);
    }
}
