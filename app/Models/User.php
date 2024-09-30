<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, HasRoles, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $keyType = 'string';
    protected $primaryKey = 'uuid';

    public $incrementing = false;

    protected $fillable = [
        'uuid',
        'name',
        'email',
        'email_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *  
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'timestamp',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'user_id', 'uuid');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'user_id', 'uuid');
    }

    public function scopeSearch($query, $value)
    {
        $query->when(!empty($value), function ($query) use ($value) {
            return $query->where('name', 'like', '%' . $value . '%')
                ->orWhere('email', 'like', '%' . $value . '%')
                ->orWhereHas('roles', function ($roleQuery) use ($value) {
                    $roleQuery->where('name', 'like', '%' . $value . '%');
                });
        });
    }
    
}
