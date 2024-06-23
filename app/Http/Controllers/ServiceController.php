<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('allServices', compact('services'));
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
            'service_icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('service_icon')) {
            $imagePath = $request->file('service_icon')->store('images', 'public');
            $validated['service_icon'] = 'storage/' . $imagePath; // Save path to the public directory
        }
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
     * by admin only
     */
    public function edit(Service $service)
    {
        return view('admin.editService', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'service_name' => 'required|string|max:255',
            'service_description' => 'nullable|string',
            'service_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $service = Service::findOrFail($id);
        $service->service_name = $request->input('service_name');
        $service->service_description = $request->input('service_description');

        if ($request->hasFile('service_icon')) {
            // Delete the old icon if it exists
            if ($service->service_icon && Storage::disk('public')->exists(str_replace('storage/', '', $service->service_icon))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $service->service_icon));
            }
            else
            {
                dd("test");
            }

            // Store the new icon
            $path = $request->file('service_icon')->store('images', 'public');
            $service->service_icon = 'storage/' .$path; // Save the path in the database relative to the public disk
        }

        $service->save();
        // if ($request->hasFile('service_icon')) {
            
        //     // Delete the old icon if it exists
        //     if ($service->service_icon && Storage::disk('public')->exists($service->service_icon)) {
        //         Storage::disk('public')->delete($service->service_icon);
        //     }
        //     $imagePath = $request->file('service_icon')->store('images', 'public');
        //     $validated['service_icon'] = 'storage/' . $imagePath;  // Save path to the public directory

        //     $service->update($request->only(['service_name', 'service_description','service_icon']));

        //     return redirect()->route('admin.services')->with('success', 'Service updated successfully.');
        // }
        
        // $service->update($request->only(['service_name', 'service_description']));

        return redirect()->route('admin.services')->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the service by ID
        $service = Service::findOrFail($id);

        // Extract the file name from the existing service_icon path
        $existingIcon = str_replace('storage/', '', $service->service_icon);

        // Check if the existing file exists
        if ($service->service_icon && Storage::disk('public')->exists($existingIcon)) {
            // Delete the old icon file
            Storage::disk('public')->delete($existingIcon);
        }

        // Delete the service record from the database
        $service->delete();

        return redirect()->route('admin.services')->with('success', 'Service deleted successfully.');
    }
}
