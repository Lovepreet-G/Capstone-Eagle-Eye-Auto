<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    // Show all services in the admin area
    public function adminIndex()
    {
        $services = Service::all();
        return view('admin.services', compact('services'));
    }

    // Show the form for creating a new service
    public function create()
    {
        return view('admin.addService');
    }

    // Store a newly created service in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_name' => 'required|string|max:255',
            'service_description' => 'required|string',
            'service_icon' => 'required|string|max:255',
        ]);

        Service::create($validated);

        return redirect()->route('admin.services')->with('success', 'Service added successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
