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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();
            //
            $table->string('first_name');
            $table->string('second_name');
            $table->string('middle_name')->nullable();
            //
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role')->default(1)->comment('1:student, 2:dean, 3:medical, 4:hostel_manager, 5:vice_rector');
            //
            $table->boolean('active')->default(true);
            $table->rememberToken();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
