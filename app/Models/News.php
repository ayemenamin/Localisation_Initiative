<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news'; 
    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'date',
        'image',
        'add_by',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'add_by');
    }
}
