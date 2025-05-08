<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nom',
        'prenom',
        'email',
        'telephone',
        'type_projet',
        'description',
        'statut'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}