<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Discipline extends Model
{

    protected $fillable =[
    'name',
    'registration_date'
    ];

    public function allocatio (): HasMany 
    {
        return $this->hasMany(Allocation::class);
    }

    public function reportCard (): HasMany
    {
        return $this->hasMany(ReportCard::class);
    }
}
