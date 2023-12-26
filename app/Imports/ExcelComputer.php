<?php

namespace App\Imports;

use App\Models\Computer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelComputer implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Computer([
            //
            'username' => $row['username'],
            'ip' => $row['ip'],
            'os_name' => $row['os_name'],
            'remote_name' => $row['remote_name'],
            'pc_passwd' => $row["pc_passwd"],
            'shed' => $row['shed'],
        ]);
    }
}
