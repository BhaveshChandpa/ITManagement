<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cctv extends Model
{
    use HasFactory;


    protected $fillable = [ 
    
        'id',
        "location",
        "ip",
        "type",
        "remark",
        "hpe_id",
        "nvr_id",
    
    ];



    public function hpe(){

        return $this->belongsTo(Hpe::class);
    }

    public function nvr(){

        return $this->belongsTo(Nvr::class);
    }


    protected $hidden = [

        // 'id',
        'created_at',
        'updated_at',
    ];
}
