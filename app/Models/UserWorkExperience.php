<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_work_experience_id",
        "user_id",
        "work_title",
        "start_date",
        "end_date",
    ];
}
