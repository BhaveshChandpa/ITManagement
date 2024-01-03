<?php

namespace App\Http\Controllers;

use App\Models\Cctv;
use Illuminate\Http\Request;
use App\Models\Nvr;

class CctvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

      $cctv = Cctv::all();
      return view("cctv.index", compact("cctv"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('cctv.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $cctv = Cctv::create($request->all());

        return redirect()->route('cctv.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cctv $cctv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cctv $cctv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cctv $cctv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cctv $cctv)
    {
        //
    }

    public function hpe($id){

        $hpe = Cctv::find($id)->hpe;

        // $cctv->hpe->ip;

        // dd($cctv);
        return view('cctv.hpe', compact('hpe'));
    }


    public function nvr($id){

        $nvr = Cctv::find($id)->nvr;

        // $cctv->hpe->ip;

        // dd($cctv);
        return view('cctv.nvr', compact('nvr'));
    }
}
