<?php

namespace App\Http\Controllers;

use App\Models\Nvr;
use Illuminate\Http\Request;
use App\Models\Cctv;
use App\Models\Hpe;

class NvrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
        $nvr = Nvr::all();
        return view('nvr.index', compact('nvr'));



        // dd($data->type);                                
        // return view("nvr.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("nvr.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Nvr $nvr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nvr $nvr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nvr $nvr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nvr $nvr)
    {
        //
    }



    public function cctv($id){

        $nvr = Nvr::find($id)->cctvs;
       
       
        return view('nvr.cctv', compact('nvr'));  

    }


    public function hpe($id){

        $hpe = Nvr::find($id)->hpe;

        // dd($nvr->uplink);

        return view('nvr.hpe', compact('hpe'));
    }
}
