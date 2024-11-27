<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Direction extends Model
{
    use HasFactory;
    protected $fillable = [
        "created_by",
    ] ;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
