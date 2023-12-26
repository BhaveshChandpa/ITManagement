<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ComputerExcel;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    //


    public function upload(){
        // dd($request->file());
        return view("computer.import");

    }


    public function import(Request $request){
        // dd($request->file());
        // Excel::import(new ComputerExcel, $request->file['computeexcel']);


    // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        // Get the uploaded file
        $file = $request->file('file');

        // Process the Excel file
        Excel::import(new ComputerExcel, $file);

        return redirect()->back()->with('success', 'Excel file imported successfully!');

}

}
