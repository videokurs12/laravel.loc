<?php


namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $post = new Post();
        $post->title = 'Статья 2';
//        $post->content = 'Контент Статья 1';
        $post->save();


        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }

}
