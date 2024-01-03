<?php

namespace App\Http\Controllers;

use App\Models\Hpe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SwitchhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hpe = Hpe::all();
        return view('hpe.index', compact('hpe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('hpe.create');
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
    public function show(Hpe $hpe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hpe $hpe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hpe $hpe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hpe $hpe)
    {
        //
    }

    public function nvr($id){

        $nvr = Hpe::find($id)->nvrs;


      


        return view('hpe.nvr', compact('nvr'));
    }

    public function cctv($id){

        $cctv = Hpe::find($id)->cctvs;


        return view('hpe.cctv', compact('cctv'));
    }
}
