<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'wali_name',
        'wali_ic',
        'wali_age',
        'wali_birthdate',
        'wali_phoneNum',
        'wali_relationship',
        'wali_address'
        
    ];
}
