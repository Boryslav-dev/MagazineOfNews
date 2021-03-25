<?php

namespace App\Enteties;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostEntity
{
    protected $id;

    protected $Title;

    protected $description;

    protected $author;

    protected $date;

    protected $cathegory;

    protected $text;

    protected $img;

    public function getAllPosts() {
        return DB::table('posts')
            ->join('cathegory', 'posts.Cathegory_idCathegory', '=', 'cathegory.idCathegory')
            ->select('posts.*', 'cathegory.name')
            ->get();
    }

    public function getAllPostsByCathegory($cathegory) {
        return $data = DB::table('posts')->where('Cathegory_idCathegory', $cathegory)->get();
    }
}
