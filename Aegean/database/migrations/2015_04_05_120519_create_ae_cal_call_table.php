<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAeCalCallTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ae_cal_call', function(Blueprint $table)
		{
			$table->increments('ae_id');
            $table->integer('ae_activity_id');
            $table->tinyInteger('ae_calls_type');
            $table->integer('ae_activity_type_id');
            $table->integer('ae_status_id');
            $table->longText('ae_comments');
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
		Schema::drop('ae_cal_call');
	}

}
