<?php

namespace App\Exports;

use App\Models\Cctv;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportCctv implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Cctv::all();
    }

    public function headings(): array
    {
        return [
                   
                    'No',
                    'Location',
                    'IP',
                    'Type',
                    'Remark',
                    'Hpe_id',
                    'Nvr_id',
        
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

