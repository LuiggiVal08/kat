<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['id', 'name', 'dni', 'lastname', 'email', 'username', 'password', 'role_id'];
    public $incrementing = false;
    protected $keyType = 'string'; // UUID es un string

    protected static function boot()
    {
        parent::boot();
        static::creating(function (Model $model) {
            // if (! $model->getKey()) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
            // }
        });
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
