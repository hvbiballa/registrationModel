<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InApplication extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Inc_passportnum',
        'Inc_bankaccountnum',
        'Inc_bankname',
        'Inc_birthplace',
        'Inc_spouse_passportnum',
        'Inc_job',
        'Inc_jobtype',
        'Inc_income',
        'Inc_companyname',
        'Inc_companyaddress',
        'Inc_kin_name',
        'Inc_kin_relationship',
        'Inc_recidency_years',
        'Inc_status',
    ];
}
