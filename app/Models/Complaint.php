<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;


    protected $fillable = [ 
    
    "no",
    "department",
    "problem",
    "types_of_maintenance",
    "complaint_date",
    "complaint_by",
    "maintenance_require",
    "edp_maintenance_supervisor",
    "maintained_by",
    "completed_at",
    "remark",

];

    protected $hidden = [
        "id",
        "updated_at",
        "created_at",
    ];
    

}
