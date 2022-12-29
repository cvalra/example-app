<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class managecv extends Model
{
    use HasFactory;
    protected $table = 'managecv';
    protected $fillable = [
       'date',
           'title',
            'participant',
            'theme',
           'level',
          'position',
       
    ];
}
