<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatevcsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('nom');
            $table->string('prenom');
            $table->string('disponiblite');
            $table->string('cour');
            $table->string('education');
            $table->string('technologie');
            $table->string('language');
            $table->string('motivation');
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
        Schema::drop('vcs');
    }
}
