<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserKandidatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_kandidat', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('socialite_id')->nullable();
			$table->string('socialite_provider')->nullable();

			$table->string('email');
			$table->string('password')->nullable();
			$table->string('remember_token')->nullable();

			$table->boolean('status_akun')->default(0);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_kandidat');
	}

}
