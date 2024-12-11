<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AllotmentStatus extends Model
{
    use HasFactory;

    protected $table = 'allotment_status';

    protected $fillable = [
        'status',
        'created_by',
    ];

    // Relacionamento com o usuário que criou o status
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
