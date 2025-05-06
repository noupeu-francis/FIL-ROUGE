<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'telephone',
        'role',
        'is_active',
        'derniere_connexion',
        'user_id'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'derniere_connexion' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}