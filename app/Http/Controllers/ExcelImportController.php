<?php

namespace App\Http\Controllers;

use App\Imports\ComputerExcel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;




class ExcelImportController extends Controller
{
    //



    public function fileupload(){


        return view('upload');


    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        $file = $request->file('file');

        Excel::import(new ComputerExcel, $file);
    

        return redirect()->back()->with('success', 'Data imported successfully.');
    }
}
