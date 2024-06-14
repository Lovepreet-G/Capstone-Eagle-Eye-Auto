<?php

namespace App\Http\Controllers;

use App\Models\car_repair_history;
use App\Http\Requests\Storecar_repair_historyRequest;
use App\Http\Requests\Updatecar_repair_historyRequest;
use App\Models\employees;
use Illuminate\Http\Request;


class CarRepairHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carRepairs = car_repair_history::with('employee')->get();

        return view('admin.carRepairHistory', compact('carRepairs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $employees = employees::all();
        return view('admin.addCarRepair', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storecar_repair_historyRequest $request)
    {
        $request->validate([
            'vin' => 'required|integer',
            'repair_date' => 'required|date',
            'repair_type' => 'required|string|max:255',
            'employee_id' => 'nullable|exists:employees,id',
            'parts_used' => 'required|string|max:255',
            'total_cost' => 'required|numeric',
            'note' => 'nullable|string',
        ]);

        car_repair_history::create($request->all());

        return redirect()->route('admin.carRepairHistory')->with('success', 'Car repair record added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $search = $request->input('search');
        $field = $request->input('field', 'vin');

        if ($search) {
            $carRepairs = car_repair_history::where($field, 'like', '%' . $search . '%')->get();
        } else {
            $carRepairs = car_repair_history::all();
        }

        return view('admin.carRepairHistory', compact('carRepairs'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(car_repair_history $car_repair_history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatecar_repair_historyRequest $request, car_repair_history $car_repair_history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(car_repair_history $car_repair_history)
    {
        //
    }
}
