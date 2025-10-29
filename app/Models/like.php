<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'like';
    protected $fillable = ['publicacao_id', 'createdAt', 'updatedAt','user_id'];
    public $timestamps = false;
}
