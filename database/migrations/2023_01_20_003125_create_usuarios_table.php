<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    // Schema::create('usuarios', function (Blueprint $table) {
    //   $table->increments('id');
    //   $table->string('nombre', 255);
    //   $table->string('email', 255);
    //   $table->string('password', 255);
    //   $table->integer('edad');
    //   $table->integer('sueldo');
    //   $table->timestamps();
    // });

    DB::statement("
      CREATE TABLE usuarios(
      id int(255) auto_increment not null,
      nombre varchar(255),
      email varchar(255),
      password varchar(255),
      PRIMARY KEY(id)
    );");
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('usuarios');
  }
};
