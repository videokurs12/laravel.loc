<?php


namespace App\Http\Controllers;


use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $tag = Tag::find(3);
        dump($tag->title);
        foreach ($tag->posts as $post){
            dump($post->title);
        }
        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }

}
