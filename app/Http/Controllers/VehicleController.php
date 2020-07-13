<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;


class VehicleController extends Controller
{

    public function index(Request $request)
    {
        $vehicles = Vehicle::where('active', $request->query('active', 1))->get();
        return view('vehicle.index', compact('vehicles'));
    }

    public function create()
    {
        $vehicle = new Vehicle();

        return view('vehicle.create', compact('vehicle'));
    }

    public function store(Request $request)
    {
        Vehicle::create($this->validatedData());

        return redirect('/vehicles');
    }

    public function show(Vehicle $vehicle)
    {
        return view('vehicle.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicle.edit', compact('vehicle'));
    }

    public function update(Vehicle $vehicle)
    {
        $vehicle->update($this->validatedData());

        return redirect('/vehicles');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect('/vehicles');
    }

    protected function validatedData()
    {
        return request()->validate([
            'customer_id' => 'required',
            'rego' => 'required',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'chasis_number' => 'required',
            'rego_expiry' => 'required',
            'colour' => 'required',
            'active' => 'required'
        ]);
    }
}
