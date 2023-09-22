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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('gender', 10);
            $table->unsignedBigInteger('cityid')->nullable(); // Make sure it's the same data type as the id in cities
            $table->foreign('cityid')
            ->references('id')->on('cities')
            ->onUpdate('cascade')
            ->onDelete('set null');
            // $table->foreignId('city_id')->constrained('cities')->nullOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

