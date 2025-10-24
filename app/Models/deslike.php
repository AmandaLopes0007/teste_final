<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class deslike extends Model
{
    protected $table = 'deslikes';
    protected $fillable = ['publicacao_id', 'createdAt', 'updatedAt'];
    public $timestamps = false;
}
