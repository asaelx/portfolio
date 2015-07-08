<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Program;

use Intervention\Image\ImageManagerStatic as Image;

class ProgramsController extends Controller
{
    public function index(){
        $programs = Program::all();
        return view('admin-programs')->with('programs', $programs);
    }

    public function show($id = null){

        if(!is_null($id)):
            $program = Program::find($id);
            return view('admin-program')->with('program', $program);
        else:
            return view('admin-program');
        endif;
    }

    public function create(Request $request){
        $program = new Program;

        $program->name = $request->get('name');

        $this->saveImage($request, $program);

        $program->save();

        return redirect('admin/programs');
    }

    public function edit($id, Request $request){

        $program = Program::find($id);
        $program->name = $request->get('name');

        if($request->hasFile('icon')):
            $this->saveImage($request, $program);
        endif;

        $program->save();

        return redirect('admin/program/' . $program->id);

    }

    public function delete($id){
        $program = Program::find($id);
        $program->delete();

        return redirect('admin/programs');
    }

    private function saveImage($request, $program){
        $file = $request->file('icon');
        $extension = $file->getClientOriginalExtension();

        $icon = 'img/uploads/' . time() . '_icon.' . $extension;

        Image::make($file)->save($icon);

        $program->icon = $icon;
    }
}
