<?php

namespace App\Http\Controllers\Admin;

use App\DTOs\ServiceDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceStoreRequest;
use App\Http\Requests\Admin\ServiceUpdateRequest;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::with('category')->latest()->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.services.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceStoreRequest $request)
    {
        $dto = ServiceDto::fromRequest($request);
        Service::create($dto->toArray());

        return redirect()->route('admin.services.index')->with('success', 'Service Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $service->load('category');
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $categories = Category::all();
        return view('admin.services.edit', compact('service', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceUpdateRequest $request, Service $service)
    {
        $dto = ServiceDTO::fromRequest($request);
        $service->update($dto->toArray());
        return redirect()->route('admin.services.index')->with('success','Услуга успешно измененна');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
