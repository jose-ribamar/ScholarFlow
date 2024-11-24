<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enrollment extends Model
{
    protected $fillable = [
        'registration_date',
        'student_id',
        'class_id',
    ];

    public function Student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function SchoolClass(): BelongsTo
    {
        return $this->belongsTo(SchoolClass::class);
    }
}
