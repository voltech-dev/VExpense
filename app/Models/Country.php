<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table ='country';
    public $timestamps = true;
    protected $fillable= [
        'company_id',
        'unit_id',
        'country_name',
        'created_at'
    ];
}
