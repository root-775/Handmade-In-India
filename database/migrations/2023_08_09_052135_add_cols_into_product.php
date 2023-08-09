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
        Schema::table('products', function (Blueprint $table) {
            $table->integer('product_price')->after('product_brand')->nullable();
            $table->integer('product_image')->after('product_brand')->nullable();
            $table->integer('product_flip_image')->after('product_brand')->nullable();
            $table->integer('product_desc_images')->after('product_brand')->nullable();
            $table->integer('product_discount_percentage')->after('product_brand')->nullable();
            $table->text('product_sku')->after('product_brand')->nullable();
            $table->text('product_short_description')->after('product_brand')->nullable();
            $table->text('product_long_description')->after('product_brand')->nullable();
            $table->text('product_stock')->after('product_brand')->nullable();
            $table->text('product_rating')->after('product_brand')->nullable();

            $table->dropColumn(['product_image_path', 'product_description']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {

            $table->dropColumn([ 'product_price',
            'product_image',
            'product_flip_image',
            'product_desc_images',
            'product_discount_percentage',
            'product_sku',
            'product_short_description',
            'product_long_description',
            'product_stock',
            'product_rating']);
            $table->string('product_image_path', 150)->nullable();
            $table->string('product_description', 150)->nullable();
        });
    }
};
