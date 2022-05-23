<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
           $table-> string('type');
           $table-> string('name');
           $table-> string('address');
           $table-> string('cost');
           $table-> string('postedate');
           $table->timestamps();
           //$table->unsignedBigInteger('customer_id');
           //$table->foreign('customer_id')->references('id')->on('customers');
           // $table->foreign('catagory_id')->references('id')->on('catagories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
