<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportCard extends Model
{
    protected $fillable = [
        'grade',
        'approved',
        'student_id',
        'class_id',
        'teachers_id',
        'id_discipline',
    ];
}
