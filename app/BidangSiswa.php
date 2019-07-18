<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidangSiswa extends Model
{
    protected $table = 'bidang_siswa';
    
    protected $fillable = ['id_siswa', 'id_bidang'];
}
