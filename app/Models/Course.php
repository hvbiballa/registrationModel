<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //tell our model what column we have in our table
    protected $fillable=[
        'id',
        'cou_locDistrict',
        'cou_address',
        'cou_date',
        'cou_startTime',
        'cou_endTime',
        'cou_capacity',
        'cou_issuedDate'
    ];
}
