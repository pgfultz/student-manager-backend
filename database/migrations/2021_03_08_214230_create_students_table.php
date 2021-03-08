<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->date('birth_date');
            $table->integer('year');
            $table->string('address_cep', 50);
            $table->string('address_street', 120);
            $table->integer('address_number');
            $table->string('address_complement', 50)->nullable();
            $table->string('address_district', 100);
            $table->string('address_city', 100);
            $table->string('address_state', 100);
            $table->string('mother_name', 100);
            $table->string('mother_cpf', 50);
            $table->string('payment_date');
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
        Schema::dropIfExists('students');
    }
}
