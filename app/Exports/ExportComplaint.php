<?php

namespace App\Exports;

use App\Models\Complaint;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportComplaint implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Complaint::all();

    }

    public function headings(): array
    {
        // Define column headings
        return [
            'No',
            'Department',
            'Problem',
            'Types Of Maintenance',
            'Complaint Date',
            'Maintenance Require',
            'Maintenance Require',
            'Edp Department SuperVisor',
            'Maintained By',
            'Completed At',
            'Remark',
            
        ];
    }


    public function styles(Worksheet $sheet)
    {
    return [
       // Style the first row as bold text.
       1    => ['font' => ['bold' => true]],
    ];
    }



   
  
}
