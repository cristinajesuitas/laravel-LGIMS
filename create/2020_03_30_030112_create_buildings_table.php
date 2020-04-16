<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('pin');
			$table->string('owner');
			$table->string('designation');
			$table->string('occupancy');
			$table->integer('unit');
			$table->integer('storey');
			$table->decimal('floorarea',8,2);
			$table->string('unitNo',5);
			$table->string('floor',5);
			$table->string('phase',5);
			$table->string('block',5);
			$table->string('lot',5);
			$table->string('houseno',5);
			$table->string('street',20);
			$table->string('sitio',20);
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
        Schema::dropIfExists('buildings');
    }
}
