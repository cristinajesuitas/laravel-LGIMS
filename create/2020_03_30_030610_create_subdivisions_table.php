<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubdivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdivisions', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('pin');
			$table->string('title');
			$table->string('owner');
			$table->string('designation');
			$table->decimal('floorarea',8,2);
			$table->integer('unit');
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
        Schema::dropIfExists('subdivisions');
    }
}
