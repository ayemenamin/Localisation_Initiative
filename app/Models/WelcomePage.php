<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomePage extends Model
{
    use HasFactory;

    protected $table = 'welcomePages'; 
    protected $fillable = [
        'title_en',
        'title_en',
        'title_ar',
        'sub_title_ar',
        'image',
        'created_at',
        'updated_at',
    ];
    
}
