<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('railway_company', 255);
            $table->string('departure_station', 255);
            $table->string('arrival_station', 255);
            $table->dateTime('departure_time', precision: 0);
            $table->dateTime('arrival_time', precision: 0);
            $table->string('train_code', 255)->unique();
            $table->unsignedTinyInteger('total_carriages');
            $table->boolean('is_on_time')->default(false);
            $table->boolean('is_cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
