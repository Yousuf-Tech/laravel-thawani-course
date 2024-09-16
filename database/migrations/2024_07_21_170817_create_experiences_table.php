<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * ['year' => '2022- Present', 'position' => 'Senior Web Developer', 'company' => 'Stark Industries', 'location' => 'Los Angeles, CA', 'description' => fake()->text() ],

     */
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->text("year");
            $table->text("title")->nullable();
            $table->text("company")->nullable();
            $table->text("location")->nullable();
            $table->longText("description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
