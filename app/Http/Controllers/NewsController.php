<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use View;

class NewsController extends Controller
{
    //
    public function all()
    {
        $news = App\News::all();
        return View::make('news/index')->with('news',$news);
    }

    public function show($id)
    {
        $new = App\News::find($id);
        return View::make('news/news')->with('new',$new);
    }
}
