<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalWSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modal_w_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName');
            $table->string('secoundName');
            $table->string('email');
            $table->text('text');
            $table->string("workType");
            $table->string('matType');
            $table->integer('width');
            $table->integer('length');
            $table->integer('height');
            $table->string('fileName');

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
        Schema::dropIfExists('modal_w_s');
    }
}
