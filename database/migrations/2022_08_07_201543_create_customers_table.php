<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('customers', function (Blueprint $table) {
            // $table->id();
            $table-> increments('id');
            $table-> string('idno');
            $table-> enum('type', ['Individual', 'Business'])->default('M');;
            $table-> string('name');
            $table-> string('address');
            $table-> string('gender');
            $table-> date('dob');
            $table-> date('timestamp');
            $table-> string('contacts');

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
        Schema::dropIfExists('customers');
    }
};
