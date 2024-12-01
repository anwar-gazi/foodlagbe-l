<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rider_location', function (Blueprint $table) {
            $table->id();
            $table->decimal('lat')->nullable(false);
            $table->decimal('lon')->nullable(false);
            $table->string('rider_username')->nullable(false)->index();
            $table->timestamps();

            $table->unique(['lat', 'lon', 'rider_username']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_rider_location');
    }
};
