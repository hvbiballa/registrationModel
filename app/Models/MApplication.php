<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'applicant_id',
        'spouse_id',
        'user_id',
        'wali_id',
        'witness_id',
        'mapp_dateApply',
        'mapp_marriageDate',
        'mapp_marriageAddress',
        'mapp_marriageTime',
        'mapp_masKahwin',
        'mapp_hantaran',
        'mapp_jurunikahName',
        'mapp_status',
        'mapp_noApp',
        'mapp_category',
        'mapp_hivStatus',
        'mapp_hivForm',
        'mapp_uploadHIV',
        'mapp_wakalahForm',
        'mapp_uploadWakalah'

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
