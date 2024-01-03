<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Hpe extends Model
{
    use HasFactory;

    protected $fillable = [ 

        'id',
        'location',
        'ip',
        'total_port',
        'computer',
        'cctv',
        'uplink',
        'remark',
        
    ];

    public function nvrs(){

        return $this->hasMany(Nvr::class);
    }

    public function cctvs(){

        return $this->hasMany(Cctv::class);
    }


    protected $hidden = 
        [ 
            'created_at',
            'updated_at',
        ];
}   
