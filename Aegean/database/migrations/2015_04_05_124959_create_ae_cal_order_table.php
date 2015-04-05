<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAeCalOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ae_cal_order', function(Blueprint $table)
		{
			$table->increments('ae_id');
            $table->integer('ae_activity_id');
            $table->integer('ae_activity_type_id');
            $table->longText('ae_comments');
            $table->integer('ae_status_id');
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
		Schema::drop('ae_cal_order');
	}

}
