<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAeAppUserProfile extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ae_app_user_profile', function(Blueprint $table)
		{
			$table->increments('ae_id');
            $table->integer('ae_user_id');
            $table->integer('ae_view_id');
            $table->tinyInteger('ae_create');
            $table->tinyInteger('ae_read');
            $table->tinyInteger('ae_update');
            $table->tinyInteger('ae_delete');
			$table->timestamps();

            //$table->primary('ae_id');
           /* $table->foreign('ae_user_id')->references('ae_id')->on('ae_app_user');
            $table->foreign('ae_view_id')->references('ae_id')->on('ae_app_view');*/
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ae_app_user_profile');
	}

}
