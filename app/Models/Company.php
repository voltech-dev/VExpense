<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table ='ex_company';
    public $timestamps = true;
    protected $fillable= [
        'company_name',
        'created_at'
    ];
}
