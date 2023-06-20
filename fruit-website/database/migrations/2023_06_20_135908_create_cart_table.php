<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNameTable extends Migration
{
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('plan');
            $table->string('plan_price');
            $table->integer('plan_point');
            $table->integer('status')->default(0);

            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
        
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
