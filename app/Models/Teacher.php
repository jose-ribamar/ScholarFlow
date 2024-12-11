<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    protected $fillable = [
        "created_by",
    ] ;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function allocatio (): HasMany 
    {
        return $this->hasMany(Allocation::class, 'created_by');
    }

    public function reportCard (): HasMany
    {
        return $this->hasMany(ReportCard::class, 'created_by');
    }
}
