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
        Schema::create('musts', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('volume');
            $table->foreignId('owner_id')->constrained('owners')->onDelete('cascade');
            $table->foreignId('tank_id')->constrained('tanks')->onDelete('cascade');
            //$table->foreignId('type_id')->constrained('types')->onDelete('cascade'); //pour apres
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musts');
    }
};
