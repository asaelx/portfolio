<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

use App\Config;
use App\Tag;
use App\Shot;
use Markdown;

class HomeController extends Controller
{
    public function index(){

        if(Session::has('language')):
            $data = $this->setLang(Session::get('language'));
        else:
            Session::put('language', 'sp');
            $data = $this->setLang(Session::get('language'));
        endif;

        return view('home')->with('data', $data);
    }

    public function shot(){
        return view('shot');
    }

    public function changeLang($lang){

        if($lang == 'en'):
            Session::put('language', 'en');
        elseif($lang == 'sp'):
            Session::put('language', 'sp');
        endif;

        $data = $this->setLang($lang);

        return redirect('/');
    }

    private function setLang($lang){

        $config     = Config::find(1);
        $tags       = Tag::all();
        $shots      = Shot::all();

        switch($lang):
            case 'sp':
                $data['lang'] = 'sp';
                $data['title'] = $config->title_sp;
                $data['degree'] = $config->degree_sp;
                $data['job'] = $config->job_sp;
                $data['about_title'] = $config->about_title_sp;
                $data['about_content'] = Markdown::parse($config->about_content_sp);
                $data['contact_title'] = $config->contact_title_sp;
                $data['contact_content'] = Markdown::parse($config->contact_content_sp);
                $data['footer'] = $config->footer_sp;

                break;
            case 'en':
                $data['lang'] = 'en';
                $data['title'] = $config->title_en;
                $data['degree'] = $config->degree_en;
                $data['job'] = $config->job_en;
                $data['about_title'] = $config->about_title_en;
                $data['about_content'] = Markdown::parse($config->about_content_en);
                $data['contact_title'] = $config->contact_title_en;
                $data['contact_content'] = Markdown::parse($config->contact_content_en);
                $data['footer'] = $config->footer_en;

                break;
        endswitch;

        $data['name'] = $config->name;
        $data['tel'] = $config->tel;
        $data['email'] = $config->email;
        $data['resume'] = $config->resume;
        $data['tags'] = $tags;
        $data['shots'] = $shots;

        return $data;
    }
}
