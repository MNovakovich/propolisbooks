<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Product;
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('image')->nullable();
            $table->integer('price');
            $table->integer('discount_price')->nullable();;
            $table->boolean('discount')->default(Product::NOT_DISCOUNT);
            $table->integer('writer_id')->unsigned();
          
            $table->timestamps();
            $table->softDeletes();
           //$table->foreign('writer_id')->references('id')->on('writers');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
