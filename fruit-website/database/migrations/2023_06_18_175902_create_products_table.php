<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('product_name');
            $table->text('product_details');
            $table->string('product_contain');
            $table->decimal('one_time_price', 8, 2);
            $table->integer('one_time_point');
            $table->decimal('weekly_price', 8, 2);
            $table->integer('weekly_point');
            $table->decimal('monthly_price', 8, 2);
            $table->integer('monthly_point');
            $table->string('product_image');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
