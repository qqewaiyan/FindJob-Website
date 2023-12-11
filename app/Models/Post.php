<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "post_id",
        "company_id",
        "job_title",
        "job_status",
        "job_description",
        "job_detail",
        "job_location",
        "job_requirement",
        "valid_canditate",
        "job_offer",
        "salary",
    ];
}
