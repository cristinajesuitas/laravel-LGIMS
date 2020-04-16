<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTricyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tricycles', function (Blueprint $table) {
            $table->id();
			$table->string('mudguardNo');
			$table->string('crNo');
			$table->string('plateNo');
			$table->string('engineNo');
			$table->string('chassisNo');
			$table->string('displacement');
			$table->string('cylinder');
			$table->string('fuel');
			$table->string('make');
			$table->string('series');
			$table->string('bodytype');
			$table->date('yearmodel');
			$table->string('registrationType');
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
        Schema::dropIfExists('tricycles');
    }
}
