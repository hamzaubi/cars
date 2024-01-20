@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.vehicle.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vehicles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.id') }}
                        </th>
                        <td>
                            {{ $vehicle->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.ad') }}
                        </th>
                        <td>
                            {{ $vehicle->ad }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.title') }}
                        </th>
                        <td>
                            {{ $vehicle->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.vehicle_title') }}
                        </th>
                        <td>
                            {{ $vehicle->vehicle_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.desc') }}
                        </th>
                        <td>
                            {{ $vehicle->desc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.old') }}
                        </th>
                        <td>
                            {{ $vehicle->old }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.type') }}
                        </th>
                        <td>
                            {{ $vehicle->type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.authoruid') }}
                        </th>
                        <td>
                            {{ $vehicle->authoruid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.author_showroom') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vehicle->author_showroom ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.author_username') }}
                        </th>
                        <td>
                            {{ $vehicle->author_username }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.author_link') }}
                        </th>
                        <td>
                            {{ $vehicle->author_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.phone') }}
                        </th>
                        <td>
                            {{ $vehicle->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.whatsapp') }}
                        </th>
                        <td>
                            {{ $vehicle->whatsapp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.email') }}
                        </th>
                        <td>
                            {{ $vehicle->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.refresh') }}
                        </th>
                        <td>
                            {{ $vehicle->refresh }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.is_new') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vehicle->is_new ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.promote') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $vehicle->promote ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.created') }}
                        </th>
                        <td>
                            {{ $vehicle->created }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.engine_size') }}
                        </th>
                        <td>
                            {{ $vehicle->engine_size }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.mileage') }}
                        </th>
                        <td>
                            {{ $vehicle->mileage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.price') }}
                        </th>
                        <td>
                            {{ $vehicle->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.major_accidents') }}
                        </th>
                        <td>
                            {{ $vehicle->major_accidents }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.minor_accidents') }}
                        </th>
                        <td>
                            {{ $vehicle->minor_accidents }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.vehicle_type') }}
                        </th>
                        <td>
                            {{ $vehicle->vehicle_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.fuel_type') }}
                        </th>
                        <td>
                            {{ $vehicle->fuel_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.transmission') }}
                        </th>
                        <td>
                            {{ $vehicle->transmission }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.make') }}
                        </th>
                        <td>
                            {{ $vehicle->make }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.model') }}
                        </th>
                        <td>
                            {{ $vehicle->model }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.trim') }}
                        </th>
                        <td>
                            {{ $vehicle->trim }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.year') }}
                        </th>
                        <td>
                            {{ $vehicle->year }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.source') }}
                        </th>
                        <td>
                            {{ $vehicle->source }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vehicles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection