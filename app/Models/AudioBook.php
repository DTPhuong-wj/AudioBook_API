<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AudioBook extends Model
{
    protected $fillable = ['name', 'author', 'image', 'audio'];
}
