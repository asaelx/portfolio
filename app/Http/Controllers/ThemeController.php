<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\User;
use App\Tag;

class ThemeController extends Controller
{

    private $theme_path;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::first();
        $tags = Tag::all();
        $articles = Article::latest()->published()->get();
        return view($this->theme() . 'home', compact('articles', 'admin', 'tags'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $admin = User::first();
        return view($this->theme() . 'single', compact('article', 'admin'));
    }

    /**
     * Display a listing of the resource associated with the tag name.
     *
     * @param Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function tagged(Tag $tag)
    {
        $admin = User::first();
        $tags = Tag::all();
        $articles = $tag->publishedArticles()->get();
        $currentTag = $tag;
        return view($this->theme() . 'home', compact('articles', 'currentTag', 'admin', 'tags'));
    }

    /**
     * Get the theme path from .env file
     *
     * @return String
     */
    private function theme()
    {
        return $this->theme_path = 'themes.' . env('THEME') . '.';
    }
}
