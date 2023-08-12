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
        Schema::create('sexes', function (Blueprint $table) {
            $table->id();
            $table->string('sex_name_kz', 15);
            $table->string('sex_name_ru', 15);
            $table->string('sex_name_en', 15);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
        $this->insertData();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sexes');
    }
    private function insertData()
    {
        DB::table('sexes')->insert([
            [
                'sex_name_kz' => 'Әйел',
                'sex_name_ru' => 'Женский',
                'sex_name_en' => 'Female'
            ],
            [
                'sex_name_kz' => 'Ер',
                'sex_name_ru' => 'Мужской',
                'sex_name_en' => 'Male'
            ],
        ]);
    }
};
