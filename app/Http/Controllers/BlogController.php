<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\blog;

class BlogController extends Controller
{
    /**
     * ブログ一覧を表示
     *
     * @return view
     */
    public function showList(){
        $blogs = blog::all();
        return view('blog.list', ['blogs' => $blogs]);
    }
}
