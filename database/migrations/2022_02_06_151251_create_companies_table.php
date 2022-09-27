<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('comName')->default('');
            $table->string('comRegNum')->default('');
            $table->string('comAddress')->default('');
            $table->string('comProfile')->default('');
            $table->string('bussiNature')->default('');
            $table->string('comEmail')->unique();
            $table->string('comContact')->default('');
            $table->string('password')->default('');
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
        Schema::dropIfExists('companies');
    }
}
