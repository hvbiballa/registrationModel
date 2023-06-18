<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MRegistration extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'applicant_id',
        'spouse_id',
        'user_id',
        'wali_id',
        'witness_id',
        'mreg_dateApply',
        'mreg_marriageDate',
        'mreg_marriageAddress',
        'mreg_marriageTime',
        'mreg_masKahwin',
        'mreg_hantaran',
        'mreg_jurunikahName',
        'mreg_resit',
        'mreg_status',
        'mreg_noApp',
        'mreg_category',
        'mreg_printStatus',
        'mreg_docuSokongan',
        'mreg_statusApp',
        'mreg_dateStatus'
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

    public function wali()
    {
        return $this->belongsTo(Wali::class, 'wali_id');
    }

    public function witness()
    {
        return $this->belongsTo(Witness::class, 'witness_id');
    }
}
