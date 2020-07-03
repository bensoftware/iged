<?php

namespace App\Http\Controllers;

use App\Abonement;
use Illuminate\Http\Request;

class AbonementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $abonement=new ABONEMENT();
        ABONEMENT::create([
          'email'=>$request->email,
        ]);
        return view('index.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Abonement  $abonement
     * @return \Illuminate\Http\Response
     */
    public function show(Abonement $abonement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Abonement  $abonement
     * @return \Illuminate\Http\Response
     */
    public function edit(Abonement $abonement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Abonement  $abonement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abonement $abonement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abonement  $abonement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abonement $abonement)
    {
        //
    }


}
