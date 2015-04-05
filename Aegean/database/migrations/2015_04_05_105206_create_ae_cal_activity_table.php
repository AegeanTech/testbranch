<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAeCalActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ae_cal_activity', function(Blueprint $table)
		{
			$table->increments('ae_id');
            $table->integer('ae_own_user_id');
            $table->integer('ae_ass_employee_id');
            $table->integer('ae_contacts_id');
            $table->time('ae_start_time');
            $table->time('ae_end_time');
            $table->float('ae_duration');
            $table->integer('ae_ass_workgroup_id');
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
		Schema::drop('ae_cal_activity');
	}

}
