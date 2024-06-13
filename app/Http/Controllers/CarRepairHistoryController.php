<?php

namespace App\Http\Controllers;

use App\Models\car_repair_history;
use App\Http\Requests\Storecar_repair_historyRequest;
use App\Http\Requests\Updatecar_repair_historyRequest;

class CarRepairHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carRepairs = CarRepair::all();
        return view('admin.carRepairHistory', compact('carRepairs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storecar_repair_historyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(car_repair_history $car_repair_history)
    {
        //
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
