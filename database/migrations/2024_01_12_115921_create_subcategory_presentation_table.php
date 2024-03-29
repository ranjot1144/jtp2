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
        Schema::create('subcategory_presentation', function (Blueprint $table) {
            $table->id();
            $table->string('sp_presentation');
            $table->string('sp_prod_code');

            $table->text('sp_desc');

            $table->foreignId('subcat_id')->constrained('subcategory');
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
        Schema::dropIfExists('sub_category_presentation');
    }
};
