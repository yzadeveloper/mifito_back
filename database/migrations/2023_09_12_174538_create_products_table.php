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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_product');
            $table->unsignedBigInteger('id_category')->default(1);
            $table->float('dose_ha')->default(0.00);
            $table->decimal('price_ml', 5, 2)->default(0.00);
            $table->text('technical_comments')->nullable();
            $table->text('customer_comments')->nullable();
            $table->text('application_instructions')->nullable();
            $table->string('magrama_pdf')->nullable();
            $table->boolean('ecological')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
