<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;
use App\Exports\ExportComputer;
use App\Imports\ComputerExcel;
use Maatwebsite\Excel\Facades\Excel;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $computers = Computer::all();
        return view('computer.index', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('computer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $computer = Computer::create($request->all());

        return redirect()->route('computer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computer $computer)
    {
        //
        
        return view('computer.default', compact('computer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computer $computer)
    {
        //

        $computer->update([
            'username' => $request->username,
            'ip' => $request->ip,
            'os_name' => $request->os_name,
            'remote_name' => $request->remote_name,
            'pc_passwd' => $request->pc_passwd,
            'shed' => $request->shed,
        ]);


        return redirect()->route('computer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {

        $computer->delete();
        return redirect()->route('computer.index');
        
    }




    public function upload(){

        return view('computer.index');
    }


  
}
