<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilePerusahaanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_perusahaan', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_perusahaan')->index('profile_perusahaan_fk0');
			$table->string('nama_perusahaan');
			$table->string('alamat_perusahaan');
			$table->string('tentang_perusahaan');
			$table->string('url_banner')->nullable();
			$table->string('foto_perusahaan')->nullable();
			$table->string('website_perusahaan')->nullable();
			$table->string('jenis_industri');
			$table->string('no_telp_perusahaan');
			$table->string('no_npwp_perusahaan')->nullable();
			$table->string('url_npwp_perusahaan')->nullable();
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
		Schema::drop('profile_perusahaan');
	}

}
