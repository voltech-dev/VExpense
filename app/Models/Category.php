<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'ex_category';
    public $timestamps = true;
    protected $fillable = [
        'category_name',
        'created_at'
    ];
}
