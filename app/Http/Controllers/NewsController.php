<?php
namespace App\Http\Controllers;

use App\News;
use App\User;
use App\Provider;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $news = News::with('user')->paginate(); 

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $user = User::pluck('name', 'id')->toArray();
         $provider = Provider::pluck('name', 'id')->toArray();

        return view('admin.news.create', compact('user','provider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $news = News::create($request->all());

        return redirect()->route('news.index', $news->id)->with('info', 'Noticia guardada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $user = User::pluck('name', 'id')->toArray();
        $provider = Provider::pluck('name', 'id')->toArray();

        return view('admin.news.edit', compact('news', 'user','provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news->update($request->all());

        return redirect()->route('news.index', $news->id)
            ->with('info', 'Noticia actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return back()->with('info', 'Noticia Eliminada Correctamente');
    }
}
