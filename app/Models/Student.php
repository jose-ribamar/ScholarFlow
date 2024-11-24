<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    protected $fillable = [
        "created_by",
    ] ;

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ReportCard (): HasMany
    {
        return $this->hasMany(ReportCard::class, 'created_by');
    }
}


