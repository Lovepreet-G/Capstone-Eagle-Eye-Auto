<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class car_repair_history extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        "vin",
        "repair_date",
        "repair_type",
        'employee_id',
        "parts_used",
        "total_cost",
        "note"
    ];
}
