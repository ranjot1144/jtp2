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
        Schema::table('subcategory', function (Blueprint $table) {
            $table->string('sc_ranges')->after('sub_cat_name');
            $table->string('sc_presentation')->after('sc_ranges');
            $table->string('sc_images')->after('sc_presentation');
            $table->string('sc_prod_code')->after('sc_images');
            $table->string('dimensions')->after('sc_prod_code');
            $table->text('sc_desc')->after('dimensions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subcategory', function (Blueprint $table) {
            //
        });
    }
};
