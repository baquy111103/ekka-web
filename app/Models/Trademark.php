<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    use HasFactory;
    protected $table = 'trademark';
    protected $fillable = ['name', 'slug', 'status', 'created_at', 'updated_at'];
}
