<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'teacher_id'];

    public function teacher() : BelongsTo{
        return $this->belongsTo(Teacher::class);
    }
}
