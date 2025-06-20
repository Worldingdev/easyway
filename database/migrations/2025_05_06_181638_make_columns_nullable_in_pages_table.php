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
       
            Schema::table('pages', function (Blueprint $table) {
                $table->string('videoLink')->nullable()->change();
            $table->string('text_1')->nullable()->change();
            $table->string('text_2')->nullable()->change();
            $table->string('flyer_1')->nullable()->change();
            $table->string('flyer_2')->nullable()->change();
            $table->string('flyer_3')->nullable()->change();
            $table->string('flyer_4')->nullable()->change();
            $table->string('flyer_5')->nullable()->change();
            $table->string('flyer_6')->nullable()->change();
            $table->string('adress_1')->nullable()->change();
            $table->string('adress_2')->nullable()->change();
            $table->string('tel_usa')->nullable()->change();
            $table->string('tel_ht')->nullable()->change();
            $table->string('email')->nullable()->change();
            });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            //
        });
    }
};
