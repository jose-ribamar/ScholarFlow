<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SchoolClass extends Model
{
    protected $fillable =[
        'name',
        'year',
        'registration_date',
    ];

    public function allocatio (): HasMany
    {
        return $this->hasMany(Allocation::class, 'created_by');
    }

    public function enrollment (): HasMany 
    {
        return $this->hasMany(Enrollment::class, 'created_by');
    }
}
