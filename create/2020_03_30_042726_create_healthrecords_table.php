<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthrecords', function (Blueprint $table) {
            $table->id();
			$table->foreignId('populations_id')->constrained();
			$table->foreignId('mothers_id')->constrained();
			$table->foreignId('fathers_id')->constrained();
			$table->integer('mother_no_of_pregnancy');
			$table->decimal('bodytemp',2,2);
			$table->integer('bloodpressure_systolic');
			$table->integer('bloodpressure_diastolic');
			$table->integer('pulserate');
			$table->integer('respiratoryrate');
			$table->decimal('weigth',3,2);
			$table->decimal('heigth',3,2);
			$table->string('bloodtype');
			$table->date('date_of_newborn_screening');
			$table->string('type_of_birth');
			$table->string('birth_order');
			$table->string('birth_attendant');
			$table->string('place_of_delivery');
			$table->date('date_of_birth_registration');
			$table->string('last_vaccine_received');
			$table->integer('no_of_male_children');
			$table->integer('no_of_female_children');
			$table->string('do_you_intent_to_use_FP_method?',3);
			$table->string('reason_for_using_FP',9);
			$table->string('FP_method_used',15);
			$table->string('intention_to_use');
			$table->string('pregnant?',3);
			$table->integer('no_of_months_pregnant');
			$table->date('last_menstrual_period');
			$table->date('estimated_date_of_conception');
			$table->date('estimated_date_of_delivery');
			$table->string('chief_complaint');
			$table->string('diagnoses_referrals_treatment');
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
        Schema::dropIfExists('healthrecords');
    }
}
