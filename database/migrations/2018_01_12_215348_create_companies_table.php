<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    
  
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('address');
            $table->string('number')->nullable();
            $table->string('email')->nullable();
            $table->string('pib')->nullable();
            $table->string('contact_person')->nullable();
            $table->boolean('active')->default('1');
            $table->text('note')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('city_id')->unsigned();
       
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
