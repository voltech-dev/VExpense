<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table ='customer';
    public $timestamps = true;
    protected $fillable= [
        'company_id',
        'unit_id',
        'country_id',
        'customer_name',
        'created_at'
    ];
}
