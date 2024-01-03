<?php

namespace App\Imports;

use App\Models\Cctv;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelCctv implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Cctv([
            
            'id' => $row['id'], 
            'location' => $row['location'],
            'ip' => $row['ip'],
            'type' => $row['type'],
            'remark' => $row['remark'],
            'hpe_id' => $row['hpe_id'],
            'nvr_id' => $row['nvr_id'],

        ]);
    }
}
