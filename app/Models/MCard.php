<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'applicant_id',
        'spouse_id',
        'user_id',
        'mregistration_id',
        'mcard_ApplicantPhoto',
        'mcard_SpousePhoto',
        'mcard_receipt',
        'mcard_status',
        'mcard_dateApproval',
        'mcard_printStatus',
        'mcard_noApp'
    ];

    public function applicant()
    {
        return $this->belongsTo(ApplicantDetail::class, 'applicant_id');
    }

    public function spouse()
    {
        return $this->belongsTo(ApplicantDetail::class, 'spouse_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function mregistration()
    {
        return $this->belongsTo(MRegistration::class, 'mregistration_id');
    }
}
