<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    // Страница всех новостей
    public function index()
    {
        $news = News::paginate(4); // 4 записи на страницу
        return view('news.index', compact('news'));
    }

    // Страница одной новости
    public function show($id)
    {
        $newsItem = News::findOrFail($id);
        return view('news.show', compact('newsItem'));
    }
}
