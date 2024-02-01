<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ad')->nullable();
            $table->string('title')->nullable();
            $table->string('vehicle_title')->nullable();
            $table->longText('desc')->nullable();
            $table->integer('old')->nullable();
            $table->string('type')->nullable();
            $table->integer('authoruid')->nullable();
            $table->boolean('author_showroom')->default(0)->nullable();
            $table->string('author_username')->nullable();
            $table->string('author_link')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->date('refresh')->nullable();
            $table->boolean('is_new')->default(0)->nullable();
            $table->boolean('promote')->default(0)->nullable();
            $table->date('created')->nullable();
            $table->integer('engine_size')->nullable();
            $table->integer('mileage')->nullable();
            $table->integer('price')->nullable();
            $table->integer('major_accidents')->nullable();
            $table->integer('minor_accidents')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('transmission')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('trim')->nullable();
            $table->integer('year')->nullable();
            $table->string('source')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
