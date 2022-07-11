<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'course_id',
        'user_id',
        'content',
        'star'
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
