<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatOrdereditemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('itemname');
            $table->string('itemunit');
            $table->string('companyname');
            $table->string('location');
            $table->integer('duration');
            $table->integer('itemquantity');
            $table->double('itemprice');
            $table->double('totalprice');
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
        //
    }
}
