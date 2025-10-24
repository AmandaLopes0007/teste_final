<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    protected $table = 'likes';
    protected $fillable = ['publicacao_id', 'createdAt', 'updatedAt'];
    public $timestamps = false;
}
