<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('populations', function (Blueprint $table) {
            $table->id();
			$table->foreignId('householdhead_id')->constrained();
			$table->string('relationship',15);
			$table->string('lname',20);
			$table->string('fname',20);
			$table->string('mname',20);
			$table->date('birthdate');
			$table->string('sex',6);
			$table->string('civilstatus',18);
			$table->string('citizenship',20);
			$table->string('occupation',20);
			$table->string('education',25);
			$table->string('religion',20);
			$table->string('ethnicity',20);
			$table->date('staydate');
			$table->string('reasonIn');
			$table->string('lenght_to_stay');
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
        Schema::dropIfExists('populations');
    }
}
