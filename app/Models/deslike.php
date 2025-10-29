<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deslike extends Model
{
    protected $table = 'deslike';
    protected $fillable = ['publicacao_id', 'createdAt', 'updatedAt','user_id'];
    public $timestamps = false;
}
