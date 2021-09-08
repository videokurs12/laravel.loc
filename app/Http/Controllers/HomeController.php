<?php


namespace App\Http\Controllers;


use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $posts = Rubric::find(4)->posts;
        dump($posts);
//       $rubric = Post::find(3)->rubric;
//       dump($rubric->title);

        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }

}
