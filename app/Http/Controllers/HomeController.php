<?php


namespace App\Http\Controllers;


use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        /*$post = new Post();
        $post->fill(['title' => 'Post 5', 'content' => 'Content 5']);
        $post->save();*/

        /*$post = Post::find(5);
        $post->content = 'Content 555';
        $post->save();*/

        /*Post::where('id', '>', 3)
        ->update(['updated_at' => NOW()]);*/

        /*$post = Post::find(5);
        $post->delete();*/

//        $country = City::find(2);
//        dd($country);
//        $country->delete();
//        Country::where('Name', '=', 'Aruba')->delete();
//        Country::truncate();

        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }

}
