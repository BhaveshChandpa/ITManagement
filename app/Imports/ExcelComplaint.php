<?php

namespace App\Imports;

use App\Models\Complaint;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ExcelComplaint implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Complaint([
            //


            'no' => $row['no'],
            'department' => $row['department'],
            'problem' => $row['problem'],
            'types_of_maintenance' => $row['types_of_maintenance'],
            'complaint_date' => $row["complaint_date"],
            'complaint_by' => $row['complaint_by'],
            'maintenance_require' => $row['maintenance_require'],
            'edp_maintenance_supervisor' => $row['edp_maintenance_supervisor'],
            'maintained_by' => $row['maintained_by'],
            'completed_at' => $row['completed_at'],
            'remark' => $row['remark'],
        ]);
    }
}
