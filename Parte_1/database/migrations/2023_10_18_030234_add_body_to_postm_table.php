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
        Schema::table('postm', function (Blueprint $table) {
            $table->longText('body'); //Creas el nuevo campo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('postm', function (Blueprint $table) {
            $table->dropColumn('body'); //Eliminas el campo
        });
    }
};
