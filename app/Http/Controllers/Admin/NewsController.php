<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::status();
        $news = News::latest()->paginate(7);
        return  View('actualite', compact('news'))->with('i', (request()->input('page', 1)-1)*5);
    }

    public function admin(News $news)
    {
        $news = News::all();
        return view('admin.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(News $news)
    {
        return view('admin.create')->with([
            'news' => $news,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = News::create( $this->validator());
        $this->storeimage($news);
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news, $slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('pages.show')->with([
            'news' => $news,
            // 'mightAlsoLike' => $mightAlsoLike,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->update($this->validator());

        $this->storeimage($news);
        return redirect()->route('admin.index', $news);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.index');
    }

    public function validator()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'content' => 'required|min:5',
            'slug' => 'required',       
            'status' => 'required|integer',       
            'image' => 'sometimes|image'       

        ]);
    }

    public function storeimage(News $news)
    {
       if (request('image')) {
           $news->update([
                'image' => request('image')->store('avatars', 'public'),
           ]);
       }
    }
}
