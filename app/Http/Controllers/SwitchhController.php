<?php

namespace App\Http\Controllers;

use App\Models\Switchh;
use Illuminate\Http\Request;

class SwitchhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $switches = Switchh::all();
        return view('switchh.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Switchh $switchh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Switchh $switchh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Switchh $switchh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Switchh $switchh)
    {
        //
    }
}
