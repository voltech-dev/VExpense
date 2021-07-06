<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table ='ex_project';
    public $timestamps = true;
    protected $fillable= [
        'company_id',
        'unit_id',
        'country_id',
        'customer_id',
        'project_name',
        'project_code',
        'project_start_date',
        'project_end_date',
        'created_at'
    ];
}
