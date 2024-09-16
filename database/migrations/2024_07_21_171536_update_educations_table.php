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
        //
        // Schema::table('experiences', function (Blueprint $table) {
        //     $table->dropColumn("type");
        // });

        Schema::table('education', function (Blueprint $table) {
            $table->text("type")->nullable()->default("master");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
