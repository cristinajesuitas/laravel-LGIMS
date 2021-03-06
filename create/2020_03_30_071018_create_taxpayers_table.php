<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxpayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxpayers', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('contactNo');
			$table->string('email');
			$table->string('floorarea');
			$table->integer('unit');
			$table->string('unitNo',5);
			$table->string('floor',5);
			$table->string('phase',5);
			$table->string('block',5);
			$table->string('lot',5);
			$table->string('houseno',5);
			$table->string('street',20);
			$table->string('sitio',20);
			$table->foreignId('buildings_id')->constrained();
			$table->foreignId('subdivisions_id')->constrained();
			$table->foreignId(geocodes_id)->constrained();
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
        Schema::dropIfExists('taxpayers');
    }
}
