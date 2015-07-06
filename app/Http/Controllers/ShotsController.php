<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

use App\Shot;
use App\Tag;

use Intervention\Image\ImageManagerStatic as Image;

class ShotsController extends Controller
{

    public function index(){
        $shots = Shot::all();
        return view('admin-shots')->with('shots', $shots);
    }

    public function show($id = null){

        $tags = Tag::all();

        $data['tags'] = $tags;

        if(!is_null($id)):
            $shot = Shot::find($id);
            $data['shot'] = $shot;
            return view('admin-shot')->with('data', $data);
        else:
            return view('admin-shot')->with('data', $data);
        endif;
    }

    public function create(Request $request){
        $shot = new Shot;

        $shot->title_sp = $request->get('title_sp');
        $shot->title_en = $request->get('title_en');
        $shot->content_sp = $request->get('content_sp');
        $shot->content_en = $request->get('content_en');
        $shot->tag = $request->get('tag');

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();

        $this->saveImage($request, $shot);

        $shot->save();

        return Redirect::to('admin/shots');
    }

    public function edit($id, Request $request){

        $shot = Shot::find($id);
        $shot->title_sp = $request->get('title_sp');
        $shot->title_en = $request->get('title_en');
        $shot->content_sp = $request->get('content_sp');
        $shot->content_en = $request->get('content_en');
        $shot->tag = $request->get('tag');

        if($request->hasFile('image')):
            $this->saveImage($request, $shot);
        endif;

        $shot->save();

        return Redirect::to('admin/shot/' . $shot->id);

    }

    public function delete($id){
        $shot = Shot::find($id);
        $shot->delete();

        return Redirect::to('admin/shots');
    }

    private function saveImage($request, $shot){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();

        $image_small = 'img/uploads/' . time() . '_small.' . $extension;
        $image_big = 'img/uploads/' . time() . '_big.' . $extension;

        Image::make($file)->resize(250, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($image_small);

        Image::make($file)->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($image_big);

        $shot->image_small = $image_small;
        $shot->image_big = $image_big;
    }
}
