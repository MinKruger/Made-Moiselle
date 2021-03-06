<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('cpf')->unique();
            $table->date('birthdate');
            $table->enum('sex', ['f', 'm']);
            $table->string('email');
            $table->string('address');
            $table->string('number');
            $table->string('complement')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('cep');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
