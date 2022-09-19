<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendinbluesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sendinblues', function (Blueprint $table) {
            $table->id()->identity();
            $table->string('st_text');
            $table->string('ts');
            $table->string('sub');
            $table->string('frm');
            $table->string('email');
            $table->string('tag');
            $table->string('mid');
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
        Schema::dropIfExists('sendinblues');
    }
}
