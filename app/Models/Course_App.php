<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_App extends Model
{
    use HasFactory;

    //tell our model what column we have in our table
    protected $fillable=[
        'id',
        'applicant_id',
        'staff_id',
        'course_id',
        'user_id',
        'couApp_attendance',
        'couApp_receipt',
        'couApp_approveStatus',
        'couApp_noApp'
    ];

    public function applicant()
    {
        return $this->belongsTo(ApplicantDetail::class, 'applicant_id');
    }
    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }
    public function Course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
