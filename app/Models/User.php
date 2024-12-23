<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'cpf',
        'date_of_birth',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function Direction (): HasMany
    {
        return $this->hasMany(Direction::class, 'created_by');
    }

    public function Student (): HasMany
    {
        return $this->hasMany(Student::class, 'created_by');
    }
    
    public function address (): HasMany
    {
        return $this->hasMany(related: Address::class);
    }
    
    public function allotmentStatus (): HasMany
    {
        return $this->hasMany(related: AllotmentStatus::class);
    }
    
    public function Teacher (): HasMany 
    {
        return $this->hasMany(Teacher::class, 'created_by');
    }
    
    
}
