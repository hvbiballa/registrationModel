<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Witness extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'wit_name1',
        'wit_icNum1',
        'wit_adress1',
        'wit_noPhone1',
        'wit_age1',
        'wit_name2',
        'wit_icNum2',
        'wit_adress2',
        'wit_noPhone2',
        'wit_age2'
    ];
}
