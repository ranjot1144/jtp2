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
        Schema::table('sub_cat_ranges_presentation', function (Blueprint $table) {
            //$table->foreignId('subcat_id')->constrained('subcategory');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sub_cat_ranges_presentation', function (Blueprint $table) {
            //
        });
    }
};
