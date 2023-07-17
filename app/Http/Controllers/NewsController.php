<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\NewsStoreRequest;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        // этот участок закомментировал чтобы показать вариант реализации запроса, перенести
        // в сервисный слой не получилось, не смог передать аргумент $NewsQueryBuilder ошибка
        // $news = News::query()->where('author', 'maker')->get();
        // return $news;

        return view('news.index', [
            'newsList' => News::all()
        ]);
    }

    public function show(int $id)
    {
        $news = $this->getNews($id);
        return view('news.show', [
            'news' => News::find($id)
        ]);
    }
    public function create()
    {
        return view('news.create');
    }

    public function store(NewsStoreRequest $request)
    {
        dd($request->all());
        return Redirect::back()->withInput()->withErrors($rule);
    }
}
