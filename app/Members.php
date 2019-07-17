<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'members';
    
    protected $fillable = [
        'email',
        'name',
        'password',
        'school',
        'date_birth',
        'place_birth',
        'interest',
        'photo',
    ];
}
