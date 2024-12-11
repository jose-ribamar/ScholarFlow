<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classroom extends Model
{
    protected $fillable =[
        'name',
        'year',
        'registration_date',
    ];

    public function allocatio (): HasMany
    {
        return $this->hasMany(Allocation::class, );
    }

    public function enrollment (): HasMany 
    {
        return $this->hasMany(Enrollment::class, );
    }

    public function reportCard (): HasMany
    {
        return $this->hasMany(ReportCard::class, );
    }
}
