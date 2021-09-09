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
        $title = 'Home Page';
        $h1 = '<h1>home page</h1>';
        $data1 = range(1,20);
        $data2 = [
            'title' => 'Title',
            'content' => 'Content',
            'keys' => 'Keywords',
        ];
        return view('home', compact('title', 'h1', 'data1', 'data2'));
    }

    public function test()
    {
        return __METHOD__;
    }

}
