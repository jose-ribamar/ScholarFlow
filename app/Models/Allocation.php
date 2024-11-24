<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Allocation extends Model
{
    protected $fillable =[
        'disciplines_id',
        'class_id',
        'teachers_id',
        
    ];

    public function Discipline(): BelongsTo
    {
        return $this->belongsTo(Discipline::class);
    }

    public function SchoolClass(): BelongsTo
    {
        return $this->belongsTo(SchoolClass::class);
    }

    public function Teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
}
