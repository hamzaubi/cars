@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.vehicle.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.vehicles.update", [$vehicle->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="title">{{ trans('cruds.vehicle.fields.title') }}</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $vehicle->title) }}">
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="vehicle_title">{{ trans('cruds.vehicle.fields.vehicle_title') }}</label>
                            <input class="form-control" type="text" name="vehicle_title" id="vehicle_title" value="{{ old('vehicle_title', $vehicle->vehicle_title) }}">
                            @if($errors->has('vehicle_title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('vehicle_title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.vehicle_title_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="desc">{{ trans('cruds.vehicle.fields.desc') }}</label>
                            <textarea class="form-control" name="desc" id="desc">{{ old('desc', $vehicle->desc) }}</textarea>
                            @if($errors->has('desc'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('desc') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.desc_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="old">{{ trans('cruds.vehicle.fields.old') }}</label>
                            <input class="form-control" type="number" name="old" id="old" value="{{ old('old', $vehicle->old) }}" step="1">
                            @if($errors->has('old'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('old') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.old_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="type">{{ trans('cruds.vehicle.fields.type') }}</label>
                            <input class="form-control" type="text" name="type" id="type" value="{{ old('type', $vehicle->type) }}">
                            @if($errors->has('type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('type') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.type_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="authoruid">{{ trans('cruds.vehicle.fields.authoruid') }}</label>
                            <input class="form-control" type="number" name="authoruid" id="authoruid" value="{{ old('authoruid', $vehicle->authoruid) }}" step="1">
                            @if($errors->has('authoruid'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('authoruid') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.authoruid_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="author_showroom" value="0">
                                <input type="checkbox" name="author_showroom" id="author_showroom" value="1" {{ $vehicle->author_showroom || old('author_showroom', 0) === 1 ? 'checked' : '' }}>
                                <label for="author_showroom">{{ trans('cruds.vehicle.fields.author_showroom') }}</label>
                            </div>
                            @if($errors->has('author_showroom'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('author_showroom') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.author_showroom_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="author_username">{{ trans('cruds.vehicle.fields.author_username') }}</label>
                            <input class="form-control" type="text" name="author_username" id="author_username" value="{{ old('author_username', $vehicle->author_username) }}">
                            @if($errors->has('author_username'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('author_username') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.author_username_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="author_link">{{ trans('cruds.vehicle.fields.author_link') }}</label>
                            <input class="form-control" type="text" name="author_link" id="author_link" value="{{ old('author_link', $vehicle->author_link) }}">
                            @if($errors->has('author_link'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('author_link') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.author_link_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="phone">{{ trans('cruds.vehicle.fields.phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', $vehicle->phone) }}">
                            @if($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="whatsapp">{{ trans('cruds.vehicle.fields.whatsapp') }}</label>
                            <input class="form-control" type="text" name="whatsapp" id="whatsapp" value="{{ old('whatsapp', $vehicle->whatsapp) }}">
                            @if($errors->has('whatsapp'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('whatsapp') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.whatsapp_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="email">{{ trans('cruds.vehicle.fields.email') }}</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{ old('email', $vehicle->email) }}">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="refresh">{{ trans('cruds.vehicle.fields.refresh') }}</label>
                            <input class="form-control date" type="text" name="refresh" id="refresh" value="{{ old('refresh', $vehicle->refresh) }}">
                            @if($errors->has('refresh'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('refresh') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.refresh_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="is_new" value="0">
                                <input type="checkbox" name="is_new" id="is_new" value="1" {{ $vehicle->is_new || old('is_new', 0) === 1 ? 'checked' : '' }}>
                                <label for="is_new">{{ trans('cruds.vehicle.fields.is_new') }}</label>
                            </div>
                            @if($errors->has('is_new'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('is_new') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.is_new_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="promote" value="0">
                                <input type="checkbox" name="promote" id="promote" value="1" {{ $vehicle->promote || old('promote', 0) === 1 ? 'checked' : '' }}>
                                <label for="promote">{{ trans('cruds.vehicle.fields.promote') }}</label>
                            </div>
                            @if($errors->has('promote'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('promote') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.promote_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="created">{{ trans('cruds.vehicle.fields.created') }}</label>
                            <input class="form-control date" type="text" name="created" id="created" value="{{ old('created', $vehicle->created) }}">
                            @if($errors->has('created'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('created') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.created_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="engine_size">{{ trans('cruds.vehicle.fields.engine_size') }}</label>
                            <input class="form-control" type="number" name="engine_size" id="engine_size" value="{{ old('engine_size', $vehicle->engine_size) }}" step="1">
                            @if($errors->has('engine_size'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('engine_size') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.engine_size_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="mileage">{{ trans('cruds.vehicle.fields.mileage') }}</label>
                            <input class="form-control" type="number" name="mileage" id="mileage" value="{{ old('mileage', $vehicle->mileage) }}" step="1">
                            @if($errors->has('mileage'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('mileage') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.mileage_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="price">{{ trans('cruds.vehicle.fields.price') }}</label>
                            <input class="form-control" type="number" name="price" id="price" value="{{ old('price', $vehicle->price) }}" step="1">
                            @if($errors->has('price'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('price') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.price_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="major_accidents">{{ trans('cruds.vehicle.fields.major_accidents') }}</label>
                            <input class="form-control" type="number" name="major_accidents" id="major_accidents" value="{{ old('major_accidents', $vehicle->major_accidents) }}" step="1">
                            @if($errors->has('major_accidents'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('major_accidents') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.major_accidents_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="minor_accidents">{{ trans('cruds.vehicle.fields.minor_accidents') }}</label>
                            <input class="form-control" type="number" name="minor_accidents" id="minor_accidents" value="{{ old('minor_accidents', $vehicle->minor_accidents) }}" step="1">
                            @if($errors->has('minor_accidents'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('minor_accidents') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.minor_accidents_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="vehicle_type">{{ trans('cruds.vehicle.fields.vehicle_type') }}</label>
                            <input class="form-control" type="text" name="vehicle_type" id="vehicle_type" value="{{ old('vehicle_type', $vehicle->vehicle_type) }}">
                            @if($errors->has('vehicle_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('vehicle_type') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.vehicle_type_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="fuel_type">{{ trans('cruds.vehicle.fields.fuel_type') }}</label>
                            <input class="form-control" type="text" name="fuel_type" id="fuel_type" value="{{ old('fuel_type', $vehicle->fuel_type) }}">
                            @if($errors->has('fuel_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fuel_type') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.fuel_type_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="transmission">{{ trans('cruds.vehicle.fields.transmission') }}</label>
                            <input class="form-control" type="text" name="transmission" id="transmission" value="{{ old('transmission', $vehicle->transmission) }}">
                            @if($errors->has('transmission'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('transmission') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.transmission_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="make">{{ trans('cruds.vehicle.fields.make') }}</label>
                            <input class="form-control" type="text" name="make" id="make" value="{{ old('make', $vehicle->make) }}">
                            @if($errors->has('make'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('make') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.make_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="model">{{ trans('cruds.vehicle.fields.model') }}</label>
                            <input class="form-control" type="text" name="model" id="model" value="{{ old('model', $vehicle->model) }}">
                            @if($errors->has('model'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('model') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.model_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="trim">{{ trans('cruds.vehicle.fields.trim') }}</label>
                            <input class="form-control" type="text" name="trim" id="trim" value="{{ old('trim', $vehicle->trim) }}">
                            @if($errors->has('trim'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('trim') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.trim_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="year">{{ trans('cruds.vehicle.fields.year') }}</label>
                            <input class="form-control" type="number" name="year" id="year" value="{{ old('year', $vehicle->year) }}" step="1">
                            @if($errors->has('year'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('year') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vehicle.fields.year_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection