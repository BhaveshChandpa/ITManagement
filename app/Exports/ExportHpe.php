<?php

namespace App\Exports;

use App\Models\Hpe;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportHpe implements FromCollection, WithStyles, WithHeadingRow, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Hpe::all();

    }



    public function headings(): array
    {

        return [
            'Id',
            'Location',
            'IP',
            'Total Port',
            'Computer',
            'CCTV',
            'Uplink',
            'Remark'
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
