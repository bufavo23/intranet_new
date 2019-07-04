<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('provider')->latest()->take(8)->get();

        $fecha = \Carbon\Carbon::parse(now())->format('m');
        $users = User::whereMonth('birthday_date', '=' , $fecha )->get();
        return view('welcome', compact('news', 'users'));
    }

    public function admin(){
        return view('home');
    }

    public function showNews(News $showNews)
    {
        return view('guest.news', compact('showNews'));
    }

}
