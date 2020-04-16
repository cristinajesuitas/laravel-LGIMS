<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->id();
			$table->string('transactiontype');
			$table->foreignId('populations_id')->constrained();
			$table->foreignId('businesses_id')->constrained();
			$table->integer('total_no_of_male_employees');
			$table->integer('total_no_of_female_employees');
			$table->integer('total_no_of_lgu_male_employees');
			$table->integer('total_no_of_lgu_female_employees');
			$table->string('business_place_rented?',3);
			$table->foreignId('lessors_id')->constrained();
			$table->decimal('monthly_rental',8,2);
			$table->decimal('gross_receipts');
			$table->foreignId('revenues_id')->constrained();
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
        Schema::dropIfExists('permits');
    }
}
