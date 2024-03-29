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
        Schema::create('filterfinder_grade', function (Blueprint $table) {
            $table->id();
            $table->string('fg_grade');
            $table->string('fg_recommedation');
            $table->string('fg_url');
            
            $table->foreignId('fm_id')->constrained('filterfinder_manufacturer');

            $table->timestamp('created_at')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filterfinder_grade');
    }
};
