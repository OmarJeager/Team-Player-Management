<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    protected $fillable = ['name', 'equipe_id'];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }
    use HasFactory;
}
