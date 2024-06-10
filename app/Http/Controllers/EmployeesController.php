<?php

namespace App\Http\Controllers;

use App\Models\employees;
use App\Http\Requests\StoreemployeesRequest;
use App\Http\Requests\UpdateemployeesRequest;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addEmployee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreemployeesRequest $request)
    {
        $request->validate([
            'employee_name' => 'required|string|max:100',
            'email_address' => 'required|email|max:100',
            'mobile_number' => 'required|numeric',
            'address' => 'required|string|max:200',
            'job_role' => 'required|string|max:100',
            'joining_date' => 'required|date',
            'resignation_date' => 'nullable|date',
        ]);
    
        Employee::create([
            'employee_name' => $request->employee_name,
            'email_address' => $request->email_address,
            'mobile_number' => $request->mobile_number,
            'address' => $request->address,
            'job_role' => $request->job_role,
            'joining_date' => $request->joining_date,
            'resignation_date' => $request->resignation_date,
        ]);
    
        return redirect()->route('admin.employees')->with('success', 'Employee added successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(employees $employees)
    {
        $employees = employees::all();
        return view('admin.employees', compact('employees'));        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employees $employees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateemployeesRequest $request, employees $employees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employees $employees)
    {
        //
    }
}
