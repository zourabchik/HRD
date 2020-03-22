<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkingHoursWorkers extends Model
{
    protected $fillable = [
        'number_pp',
    ];

    public function getMarksAttribute($extra)
    {
        return array_values(json_decode($extra, true) ?: []);
    }

    public function setMarksAttribute($extra)
    {
        $this->attributes['marks'] = json_encode(array_values($extra));
    }

    public function working_hours()
    {
        return $this->belongsTo(WorkingHours::class);
    }
}
