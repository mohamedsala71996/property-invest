<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('webSite.news.index',compact('news'));
    }
}