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
        Schema::table('pages', function (Blueprint $table) {
            $table->string('flyer_1_d')->nullable(); // Restaurer si besoin
            $table->string('flyer_2_d')->nullable(); // Restaurer si besoin
            $table->string('flyer_3_d')->nullable(); // Restaurer si besoin
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            //
            $table->dropColumn('flyer_1_d'); // Restaurer si besoin
            $table->dropColumn('flyer_1_d'); // Restaurer si besoin
            $table->dropColumn('flyer_1_d'); // Restaurer si besoin
        });
    }
};
