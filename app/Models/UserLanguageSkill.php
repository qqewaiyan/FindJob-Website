<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLanguageSkill extends Model
{
    use HasFactory;

    protected $fillable=[
        "user_language_skill_id",
        "user_id",
        "language",
        "skill_level",
    ];
}
