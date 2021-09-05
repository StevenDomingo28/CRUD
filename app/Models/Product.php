<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'list';
    protected $fillable = ['name', 'price', 'quantity'];
    public $timestamps = false;

    use HasFactory;
}
