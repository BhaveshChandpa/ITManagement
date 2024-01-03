<?php

namespace App\Imports;

use App\Models\Nvr;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelNvr implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Nvr([
            //

            'id' => $row['id'],
            'location' => $row['location'],
            'ip' => $row['ip'],
            'channel' => $row['channel'],
            'hdd' => $row['hdd'],
            'storage' => $row['storage'],
            'two_tb' => $row['2tb'],
            'six_tb' => $row['6tb'],
            'eight_tb' => $row['8tb'],
            'ten_tb' => $row['10tb'],
            'remark' => $row['remark'],
            'hpe_id' => $row['hpe_id'],
        ]);
    }
}
