<?php

namespace App\Http\Controllers;

use App\News;
use App\User;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
    	$news = News::with('provider')->latest()->take(5)->get();

    	$fecha = \Carbon\Carbon::parse(now())->format('m');
        $users = User::whereMonth('birthday_date', '=' , $fecha )->get();

        return view('auth.login', compact('news', 'users'));

    }
}
