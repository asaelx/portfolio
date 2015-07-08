<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tag;

class TagsController extends Controller
{

    public function index(){
        $tags = Tag::all();
        return view('admin-tags')->with('tags', $tags);
    }

    public function show($id = null){

        if(!is_null($id)):
            $tag = Tag::find($id);
            return view('admin-tag')->with('tag', $tag);
        else:
            return view('admin-tag');
        endif;

        $tag = Tag::find($id);
        return view('admin-tag')->with('tag', $tag);
    }

    public function create(Request $request){
        $name_sp = $request->get('name_sp');
        $name_en = $request->get('name_en');

        $tag = new Tag;
        $tag->name_sp = $name_sp;
        $tag->name_en = $name_en;
        $tag->save();

        return redirect('admin/tags');
    }

    public function edit($id, Request $request){

        $name_sp = $request->get('name_sp');
        $name_en = $request->get('name_en');

        $tag = Tag::find($id);
        $tag->name_sp = $name_sp;
        $tag->name_en = $name_en;
        $tag->save();

        return redirect('admin/tag/' . $tag->id);

    }

    public function delete($id){
        $tag = Tag::find($id);
        $tag->delete();

        return redirect('admin/tags');
    }
}
