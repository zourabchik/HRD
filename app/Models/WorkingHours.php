<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkingHours extends Model
{
    public function workers()
    {
        return $this->hasMany(WorkingHoursWorkers::class);
    }
}
