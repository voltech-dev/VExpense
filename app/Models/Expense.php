<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $table ='ex_expense';
    public $timestamps = true;
    protected $fillable= [
        'company_id',
        'unit_id',
        'country_id',
        'customer_id',
        'project_id',
        'expense_date',
        'category_id',
        'expense_amount',
        'created_at'
    ];
}
