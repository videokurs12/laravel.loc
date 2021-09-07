<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
//        DB::insert("INSERT INTO posts (title, content) VALUES (:title, :content)", ['title' => 'Статья 5', 'content' => 'Контент статьи 5']);
        /*$affected = DB::update(
            'UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NUll OR updated_at IS NULL',
            [NOW(), NOW()]
        );*/
//        $deleted = DB::delete('DELETE FROM posts WHERE id = ?', [12]);
        DB::beginTransaction();
        try {
            DB::update(
                'UPDATE posts SET created_at = ? WHERE created_at IS NUll',
                [NOW()]
            );
            DB::update(
                'UPDATE posts SET updated_at = ? WHERE updated_at IS NUll',
                [NOW()]
            );
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }

        DB::transaction(function () {

        });



        $posts = DB::select("SELECT * FROM posts WHERE id >= ?", [3]);


        return $posts;
    }

    public function test()
    {
        return __METHOD__;
    }

}
