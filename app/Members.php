<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'siswa';
    
    protected $fillable = [
        'email',
        'nama',
        'password',
        'birth',
        'id_bidang',
    ];
}
