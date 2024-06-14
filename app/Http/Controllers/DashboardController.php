<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;
use App\Models\car_repair_history;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $activeEmployeesCount = employees::whereNull('resignation_date')->count();
        $salesThisMonth = car_repair_history::whereMonth('repair_date', now()->month)->sum('total_cost');
        $carsRepairedThisMonth = car_repair_history::whereMonth('repair_date', now()->month)->count();

        return view('admin.dashboard', compact('activeEmployeesCount', 'salesThisMonth', 'carsRepairedThisMonth'));
    }

}
