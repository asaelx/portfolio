<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Config;

class AdminController extends Controller
{
    public function index(){
        return redirect('admin/shots');
    }

    public function show(){
        $config = Config::find(1);
        if($config):
            return view('admin-config')->with('config', $config);
        else:
            return view('admin-config');
        endif;
    }

    public function update(Request $request){
        $config = Config::find(1);

        if(!$config):
            $config = new Config;
        endif;

        $config->title_sp = $request->get('title_sp');
        $config->title_en = $request->get('title_en');
        $config->degree_sp = $request->get('degree_sp');
        $config->degree_en = $request->get('degree_en');
        $config->job_sp = $request->get('job_sp');
        $config->job_en = $request->get('job_en');
        $config->name = $request->get('name');
        $config->tel = $request->get('tel');
        $config->email = $request->get('email');
        $config->about_title_sp = $request->get('about_title_sp');
        $config->about_title_en = $request->get('about_title_en');
        $config->about_content_sp = $request->get('about_content_sp');
        $config->about_content_en = $request->get('about_content_en');
        $config->contact_title_sp = $request->get('contact_title_sp');
        $config->contact_title_en = $request->get('contact_title_en');
        $config->contact_content_sp = $request->get('contact_content_sp');
        $config->contact_content_en = $request->get('contact_content_en');
        $config->footer_sp = $request->get('footer_sp');
        $config->footer_en = $request->get('footer_en');

        if($request->hasFile('resume')):
            $file = $request->file('resume');
            $filename = $file->getClientOriginalName();

            $file->move('files', $filename);

            $config->resume = 'files/' . $filename;
        endif;

        $config->save();

        return redirect('admin/config');
    }

}
