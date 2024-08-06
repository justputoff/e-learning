<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = ['course_detail_id', 'date', 'start_time', 'end_time'];
    
    public function courseDetail()
    {
        return $this->belongsTo(CourseDetail::class);
    }
    public function scheduleStudents()
    {
        return $this->hasMany(ScheduleStudent::class);
    }
}
