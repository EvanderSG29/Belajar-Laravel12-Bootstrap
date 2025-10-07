<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'student_id',
        'class',
        'phone',
        'gender',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
