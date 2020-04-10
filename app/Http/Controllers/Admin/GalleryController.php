<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.gallery');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Gallery $gallery)
    {
        return view('admin.gallery')->with([
            'gallery' => $gallery,
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
        $gallery = Gallery::create();
        $this->storeimage($gallery);
        return redirect()->route('pages.gallery');
        // $image_code = '';
        // $images = $request->file('file');
        
        // foreach ($images as $image) {
        //     $new_name = rand() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('images/gallery'), $new_name);
        //     $image_code .= '<div class="col-md-3" style="margin-bottom:24px;">
        //     <img src="/images/'.$new_name.'" class="img-thumbnail"/></div>';
        // } 

        // $output = array(
        //     'success'        => 'Images telecharger avec success',
        //     'image'          => $image_code
        // );
        // return response()->json($output);
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }

    public function storeimage(Gallery $gallery)
    {
       if (request('image')) {
           $gallery->update([
                'image' => request('image')->store('gallery', 'public'),
           ]);
       }
    }
}
