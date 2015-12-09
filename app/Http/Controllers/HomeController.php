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
use DB;

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

    public function shot($slug = null){

        if(is_null($slug)) return redirect('/');

        $shot = Shot::where('slug', $slug)->first();

        if(Session::has('language')):
            $data = $this->setLang(Session::get('language'));
        else:
            Session::put('language', 'sp');
            $data = $this->setLang(Session::get('language'));
        endif;

        if($shot):

            if(Session::get('language') == 'sp'):
                $data['shot']['title'] = $shot->title_sp;
                $data['shot']['content'] = Markdown::parse($shot->content_sp);
            else:
                $data['shot']['title'] = $shot->title_en;
                $data['shot']['content'] = Markdown::parse($shot->content_en);
            endif;

            $data['shot']['image_big'] = $shot->image_big;
            $data['shot']['programs'] = $shot->programs->toArray();

            return view('shot')->with('data', $data);
        else:
            return redirect('/');
        endif;

    }

    public function tag($tag = null){

        if(is_null($tag)) return redirect('/');

        if(Session::has('language')):
            $data = $this->setLang(Session::get('language'), $tag);
        else:
            Session::put('language', 'sp');
            $data = $this->setLang(Session::get('language'), $tag);
        endif;

        $data['current_tag'] = $tag;

        if($data['shots']):
            return view('home')->with('data', $data);
        else:
            return redirect('/');
        endif;

    }

    public function changeLang($lang){

        if($lang == 'en'):
            Session::put('language', 'en');
        elseif($lang == 'sp'):
            Session::put('language', 'sp');
        endif;

        $data = $this->setLang($lang);

        return back();
    }

    private function setLang($lang, $tag = null){

        if(is_null($tag)):
            $shots = Shot::orderBy('id', 'desc')->get();
        else:
            $shots = DB::table('shots')
                        ->leftJoin('tags', 'tags.id', '=', 'shots.tag')
                        ->where('tags.name_en', $tag)
                        ->orderBy('shots.id', 'desc')
                        ->get();
        endif;

        $config     = Config::find(1);
        $tags       = Tag::all();

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

    public function youtube(){
        // $long_url = str_replace("https://youtu.be/", "https://www.youtube.com/watch?v=", $url);
        //
        // return redirect("http://youtubeinmp3.com/fetch/?video=" . $long_url);
        return $_GET['url'];
    }
}
