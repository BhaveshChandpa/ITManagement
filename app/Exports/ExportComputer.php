<?php

namespace App\Exports;

use App\Models\Computer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet; 

class ExportComputer implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize  
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Computer::all();
    }



    public function headings(): array
 
    {

        return [
            'Username',
            'Ip',
            'OS Name',
            'Remote Name',
            'PC Passwd',
            'Shed'

        ];
    }


    public function styles(Worksheet $sheet)
    {
    return [
       // Style the first row as bold text.
       1    => ['font' => ['bold' => true]],

       
    ];
    }
    
    // public function columnWidths(): array
    // {
    //     // return [
    //     //     'A' => 55,
    //     //     'B' => 45,            
    //     // ];
    // }
}