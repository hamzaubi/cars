<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'vehicles';

    protected $dates = [
        'refresh',
        'created',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ad',
        'title',
        'vehicle_title',
        'desc',
        'old',
        'type',
        'authoruid',
        'author_showroom',
        'author_username',
        'author_link',
        'phone',
        'whatsapp',
        'email',
        'refresh',
        'is_new',
        'promote',
        'created',
        'engine_size',
        'mileage',
        'price',
        'major_accidents',
        'minor_accidents',
        'vehicle_type',
        'fuel_type',
        'transmission',
        'make',
        'model',
        'trim',
        'year',
        'source',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getRefreshAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setRefreshAttribute($value)
    {
        $this->attributes['refresh'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getCreatedAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setCreatedAttribute($value)
    {
        $this->attributes['created'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
