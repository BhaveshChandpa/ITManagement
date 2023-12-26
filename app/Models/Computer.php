<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'ip', 'os_name', 'remote_name', 'pc_passwd', 'shed'];


    protected $hidden = ['id', 'created_at', 'updated_at'];
}
