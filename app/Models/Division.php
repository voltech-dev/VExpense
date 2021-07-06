<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $table ='ex_division';
    public $timestamps = true;
    protected $fillable= [
        'company_id',
        'unit_id',
        'division_name',
        'division_code',
        'created_at'
    ];
    
}
