<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

     /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'title', 'body'
    ];
}
