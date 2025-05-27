<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeData extends Model
{
    //
    protected $table = 'employee_data';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'job_title',
        'skills',
        'experience',
        'education',
        'linkedin',
        'notes',
    ];
    
}
