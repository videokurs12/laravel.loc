<?php


namespace App\Http\Controllers;


use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function index(Request $request)
    {
//        Cache::put('key', 'value', 300);
//        dump(Cache::pull('key'));
//        Cache::forget('key');
//        Cache::flush();
//        dump(Cache::get('key'));
        if (Cache::has('posts')){
            $posts = Cache::get('posts');
        } else {
            $posts = Post::orderBy('id', 'desc')->get();
            Cache::put('posts', $posts);
        }
        $title = 'Home Page';
//        $posts = Post::orderBy('id', 'desc')->get();
        return view('home', compact('title',  'posts'));
    }

    public function create()
    {
        $title = 'Create Post';
        $rubrics = Rubric::pluck('title', 'id')->all();
        return view('create', compact('title', 'rubrics'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'integer',
        ]);

        /*$rules = [
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'integer',
        ];
        $messages = [
            'title.required' => 'Заполните поле названия',
            'title.min' => 'Минимум 5 символов в названии',
            'rubric_id.integer' => 'Выберите рубрику из списка',
        ];

        $validator = Validator::make($request->all(), $rules, $messages)->validate();*/

        Post::create($request->all());
        $request->session()->flash('success', 'Данные сохранены');
        return redirect()->route('home');
    }

    public function contact()
    {
        return view('contact');
    }

}
