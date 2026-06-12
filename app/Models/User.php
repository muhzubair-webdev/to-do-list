<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    protected $fillable = [
        'username',
        'fullname',
        'email',
        'password',
    ];

    public function tasks()
    {
        return $this->hasMany(tasks::class);
    }

    public function categories()
    {
        return $this->hasMany(categories::class);
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
