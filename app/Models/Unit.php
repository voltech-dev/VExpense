<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $table= 'ex_unit';
    public $timestamps = true;
    protected $fillable= [
        'company_id',
        'unit_name',
        'created_at'
    ];
}
