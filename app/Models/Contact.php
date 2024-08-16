<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // Connection To Database Table
    protected $fillable = ['name', 'email', 'phone','address'] ;
}
