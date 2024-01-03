<?php

namespace App\Imports;

use App\Models\Hpe;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelHpe implements ToModel, WithHeadingRow


{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Hpe([
            //
             'id' => $row['id'],
            'location' => $row['location'],
            'ip' => $row['ip'],
            'total_port' => $row['total_port'],
            'computer' => $row['computer'],
            'cctv' => $row['cctv'],
            'uplink' => $row['uplink'],
            'remark' => $row['remark'],
        ]);
    }
}
