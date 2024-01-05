<?php

namespace App\Http\Requests;

use App\Models\Vehicle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateVehicleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('vehicle_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'nullable',
            ],
            'vehicle_title' => [
                'string',
                'nullable',
            ],
            'old' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'type' => [
                'string',
                'nullable',
            ],
            'authoruid' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'author_username' => [
                'string',
                'nullable',
            ],
            'author_link' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'whatsapp' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
            'refresh' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'created' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'engine_size' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'mileage' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'price' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'major_accidents' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'minor_accidents' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'vehicle_type' => [
                'string',
                'nullable',
            ],
            'fuel_type' => [
                'string',
                'nullable',
            ],
            'transmission' => [
                'string',
                'nullable',
            ],
            'make' => [
                'string',
                'nullable',
            ],
            'model' => [
                'string',
                'nullable',
            ],
            'trim' => [
                'string',
                'nullable',
            ],
            'year' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
