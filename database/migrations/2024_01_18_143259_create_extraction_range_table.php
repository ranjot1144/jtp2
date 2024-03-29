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
        Schema::create('extraction_range', function (Blueprint $table) {
            $table->id();

            $table->string('er_dimension');
            $table->string('er_presentation');
            $table->string('er_prod_code');

            $table->foreignId('er_prod_id')->constrained('product');
            $table->foreignId('er_cat_id')->constrained('category');

            $table->timestamp('created_at')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extraction_range');
    }
};
