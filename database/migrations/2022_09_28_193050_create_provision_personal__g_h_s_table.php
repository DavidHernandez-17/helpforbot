<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvisionPersonalGHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provision_personal__g_h_s', function (Blueprint $table) {
            $table->id()->identity();
            $table->string('cedula');
            $table->string('nombreEmpleado');
            $table->string('centroCostos');
            $table->string('oficio');
            $table->string('cargo');
            $table->string('ingreso');
            $table->string('retiro');
            $table->string('consecutivo');
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
        Schema::dropIfExists('provision_personal__g_h_s');
    }
}
