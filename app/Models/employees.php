<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class employees extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        "employee_name",
        "email",
        "mobile",
        "address",
        "job_role",
        "joining_date",
        "resignation_date"
    ];
    public function carRepairs()
    {
        return $this->hasMany(car_repair_history::class,'employee_id');
    }
}
