<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJobHuntStatus extends Model
{
    use HasFactory;

    protected $fillable =[
        "user_job_hunt_status_id",
        "user_id",
        "employment_status",
        "exp_level",
        "job_category",
        "expected_salary",
    ];
}
