<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'name', 'email', 'password', 'role' ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [ 'password', 'remember_token' ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'role' => 'string',
        'deleted_at' => 'datetime',
    ];

    public function response(): HasMany {
        return $this->hasMany(Ticket::class, 'admin_id', 'id')->withTranshed();
    }

    public function creator(): HasMany {
        return $this->hasMany(Ticket::class, 'customer_id', 'id')->withTranshed();
    }

    public function messages(): HasMany {
        return $this->hasMany(Message::class, 'user_id', 'id')->withTranshed();
    }
}
