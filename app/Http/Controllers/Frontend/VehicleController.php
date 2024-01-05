<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyVehicleRequest;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Vehicle;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VehicleController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('vehicle_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vehicles = Vehicle::all();

        return view('frontend.vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        abort_if(Gate::denies('vehicle_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.vehicles.create');
    }

    public function store(StoreVehicleRequest $request)
    {
        $vehicle = Vehicle::create($request->all());

        return redirect()->route('frontend.vehicles.index');
    }

    public function edit(Vehicle $vehicle)
    {
        abort_if(Gate::denies('vehicle_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.vehicles.edit', compact('vehicle'));
    }

    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());

        return redirect()->route('frontend.vehicles.index');
    }

    public function show(Vehicle $vehicle)
    {
        abort_if(Gate::denies('vehicle_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.vehicles.show', compact('vehicle'));
    }

    public function destroy(Vehicle $vehicle)
    {
        abort_if(Gate::denies('vehicle_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vehicle->delete();

        return back();
    }

    public function massDestroy(MassDestroyVehicleRequest $request)
    {
        $vehicles = Vehicle::find(request('ids'));

        foreach ($vehicles as $vehicle) {
            $vehicle->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
