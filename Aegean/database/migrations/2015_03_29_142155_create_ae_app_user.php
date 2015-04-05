<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAeAppUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ae_app_user', function(Blueprint $table)
		{
			$table->increments('ae_id');
            $table->string('ae_username');
            $table->string('ae_password', 64);
            $table->integer('ae_contact_id')->nullable();
            $table->integer('ae_employee_id')->nullable();
			$table->timestamps();

            /*$table->primary('ae_id');*/
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ae_app_user');
	}

}
