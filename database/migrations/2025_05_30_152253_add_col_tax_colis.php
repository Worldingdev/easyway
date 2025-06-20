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
        Schema::table('colis', function (Blueprint $table) {
            $table->string('tax')->nullable(); // Restaurer si besoin
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('colis', function (Blueprint $table) {
            $table->dropColumn('tax'); // Restaurer si besoin
        });
    }
};
