<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        "application_id",
        "user_id",
        "cv_file",
        "post_id",
        "company_id",
        "status",
        "message",
    ];
}
