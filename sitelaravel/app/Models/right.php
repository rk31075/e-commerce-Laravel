<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class right extends Model
{
    use HasFactory;

    protected $fillable = [
        'right_name',
        'add',
        'write',
        'read',
        'edit',
        'delete',
        'buy'
    ];

    public function $roles()
    {
        return $this->hasMany(Role::class);
    }
}
