<?php

namespace App\Http\Controllers\Admin;

use App\Inscrit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InscriptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Inscrit $inscrit)
    {
        return view('student.create')->with([
            'inscrit' => $inscrit,
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
        // dd($request->all());
        $inscrit = Inscrit::create( $this->validator());
        return view('actualite');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validator()
    {
        return request()->validate([
            'titre' => 'required',
            'names' => 'required',
            'date_nais' => 'sometimes|date',       
            'civil' => 'required',      
            'address' => 'required',      
            'phone' => 'required|numeric',      
            'pays' => 'required',      
            'ville' => 'required',      
            'ecole' => 'required',      
            'option' => 'required',      
            'diplome' => 'required',      
            'pourcentage' => 'required',      
            'faculte' => 'required',      
            'promo' => 'required',      
        ]);
    }
}
