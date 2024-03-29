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
        Schema::create('category_presentation', function (Blueprint $table) {
            $table->id();
            $table->text('cp_presentation');
            $table->text('cp_prod_code');
            $table->text('cp_desc');
            $table->text('cp_industries');

            $table->foreignId('cat_id')->constrained('category');

            $table->timestamp('created_at')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_presentation');
    }
};
