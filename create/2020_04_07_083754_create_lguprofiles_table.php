<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLguprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lguprofiles', function (Blueprint $table) {
            $table->id();
			$table->foreignId('geocode_id')->constrained();
			$table->string('district',15);
			$table->string('sitios_of_bgy');
			$table->string('classification',5);
			$table->decimal('landarea',8,2);
			$table->string('indigenous_group');
			$table->string('unitNo',5);
			$table->string('floorNo',5);
			$table->string('phaseNo',5);
			$table->string('blockNo',5);
			$table->string('lotNo',5);
			$table->string('houseno',5);
			$table->string('street',20);
			$table->string('sitio',20);
			$table->string('munLogo');
			$table->string('bgyLogo');
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
        Schema::dropIfExists('lguprofiles');
    }
}
