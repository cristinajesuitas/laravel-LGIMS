<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaycarechildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daycarechildren', function (Blueprint $table) {
            $table->id();
			$table->foreignId('populations_id')->constrained();
			$table->string('handedness');
			$table->string('presently_studying?',3);
			$table->string('learningcenter');
			$table->foreignId('mothers_id')->constrained();
			$table->foreignId(fathers_id)->constrained();
			$table->integer('no_of_siblings');
			$table->foreignId('healthrecords_id')->constrained();
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
        Schema::dropIfExists('daycarechildren');
    }
}
