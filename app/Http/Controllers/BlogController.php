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

    /**
     * ブログ詳細を表示
     * @param int $id
     * @return view
     */
    public function showDetail($id){
        $blog = blog::find($id);

        if (is_null($blog)){
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('blogList'));
        }

        return view('blog.detail', ['blog' => $blog]);
    }
}
