<?php

namespace App\Exports;

use App\Models\Nvr;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class ExportNvr implements FromCollection, WithStyles, WithHeadingRow, WithHeadings, ShouldAutoSize

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Nvr::all();
    }


    public function headings(): array
    {

        return [
            'ID',
            'Location',
            'IP',
            'Channel',
            'HDD',
            'Storage',
            '2TB',
            '6TB',
            '8TB',
            '10TB',
            'Remark',
            'Hpe_id',
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
