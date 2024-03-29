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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->integer('grade_id');
            $table->integer('whatman_equivalent');
            $table->string('filtering_speed');
            $table->float('thickness',4,2);
            $table->string('pore_size');
            $table->integer('weight');
            $table->integer('filtration_speed');
            $table->float('burst_strength',4,2);

            $table->foreignId('subcat_id')->constrained('subcategory');

            $table->timestamp('created_at')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
