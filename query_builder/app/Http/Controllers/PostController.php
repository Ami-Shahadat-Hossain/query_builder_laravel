<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getExcerptDescription()
    {
        $posts = DB::table('posts')->select('excerpt', 'description')->get();
        return $posts;
    }
    public function firstRecordDescription()
    {
        $posts = DB::table('posts')->where('id', '=', '2')->first();
        return $posts->description;
    }
    public function getDescription()
    {
        $posts = DB::table('posts')->where('id', 2)->pluck('description');
        return $posts;
    }
    public function getAllTitle()
    {
        $posts = DB::table('posts')->select('title')->get();
        return $posts;
    }
    public function insertPost()
    {
        $result = DB::table('posts')->insert([
            'title' => 'X',
            'slug' => 'x',
            'excerpt' => 'excerpt',
            'description' => 'description',
            'is_published' => true,
            'min_to_read' => 2,
        ]);
        return $result;
    }
    public function update()
    {
        $affectedRows = DB::table('posts')->where('id', 2)
            ->update([
                'excerpt' => 'Laravel 10',
                'description' => 'Laravel 10',
            ]);

        return $affectedRows;
    }
    public function delete()
    {
        $affectedRows = DB::table('posts')->where('id', 3)->delete();
        return $affectedRows;
    }
    public function getPostByMinRead()
    {
        $posts = DB::table('posts')->whereBetween('min_to_read', [1, 5])->get();
        return $posts;
    }
    public function increments()
    {
        $posts = DB::table('posts')->where('id', 4)->increment('min_to_read', 1);
        return $posts;
    }
}
