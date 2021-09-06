<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        dump($_ENV['MY_SETTING']);
        dump(env('MY_SETTING2', '111'));
        dump(config('database.connections.mysql.database'));
        dump($_ENV);

        return view('home', ['res' => 5, 'name' => 'John']);
    }

    public function test()
    {
        return __METHOD__;
    }

}
