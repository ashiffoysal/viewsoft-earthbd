<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_sku' ,50)->nullable();
            $table->text('product_slug',)->nullable();
            $table->double('product_price')->nullable();
            $table->float('product_qty')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('subcategory_id');
            $table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->unsignedBigInteger('resubcategory_id');
            $table->foreign('resubcategory_id')->references('id')->on('resub_categories')
                ->onDelete('cascade');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->string('product_size')->nullable();
            $table->string('color_id');
            $table->string('tags')->nullable();
            $table->integer('is_active')->default(1);
            $table->longText('product_description')->nullable();
            $table->string('image')->nullable();
            $table->text('gallery_img')->nullable();
            $table->integer('is_deleted')->default(0);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
