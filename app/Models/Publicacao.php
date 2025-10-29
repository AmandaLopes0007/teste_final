<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $table = 'publicacao';
    protected $fillable = ['foto', 'titulo', 'cidade', 'local', 'createdAt', 'updatedAt', 'empresa_id'];
    public $timestamps = false;

    public function like()
    {
        return $this->hasMany(Like::class);
    }

    public function dislike()
    {
        return $this->hasMany(Deslike::class);
    }
}

