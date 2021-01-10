<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckcommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkcommittees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('cname');
            $table->text('ctype');
            $table->text ('cemail');
            $table->text('opnion');
            $table->text('itemname');
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
        Schema::dropIfExists('checkcommittees');
    }
}
