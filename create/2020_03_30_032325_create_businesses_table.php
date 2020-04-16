<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('tin');
			$table->string('registrationagency');
			$table->string('registration_no');
			$table->date('date_registered');
			$table->string('tradename');
			$table->string('organization');
			$table->string('economicOrg');
			$table->foreignId('taxpayers_id')->constrained();
			$table->string('contactNo');
			$table->string('email');
			$table->string('website');
			$table->string('email');
			$table->string('majorCat');
			$table->string('businessline');
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
        Schema::dropIfExists('businesses');
    }
}
