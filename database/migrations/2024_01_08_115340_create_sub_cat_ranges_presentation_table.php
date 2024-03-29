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
        Schema::create('sub_cat_ranges_presentation', function (Blueprint $table) {
            $table->id();
            $table->string('scrp_presentation');
            $table->string('scrp_prod_code');

            $table->foreignId('sub_cat_ranges_id')->constrained('sub_cat_ranges');
            $table->string('wls_link');

            $table->timestamp('created_at')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_cat_ranges_presentation');
    }
};
