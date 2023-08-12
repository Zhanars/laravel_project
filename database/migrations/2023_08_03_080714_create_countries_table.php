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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('country_name_kz', 255)->nullable(false);
            $table->string('country_name_ru', 255)->nullable(false);
            $table->string('country_name_en', 255)->nullable(false);
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
        Schema::dropIfExists('countries');
    }

    public function insertData(){
        DB::statement("INSERT INTO countries (country_name_kz, country_name_ru, country_name_en) VALUES
                        ('Қазақстан', 'Казахстан', 'Kazakhstan'),
                        ('Россия', 'Россия', 'Russia'),
                        ('Узбекистан', 'Узбекистан', 'Uzbekistan'),
                        ('Беларусь', 'Беларусь', 'Belarus'),
                        ('Украина', 'Украина', 'Ukraine'),
                        ('Китай', 'Китай', 'China'),
                        ('Германия', 'Германия', 'Germany'),
                        ('Турция', 'Турция', 'Turkey'),
                        ('Италия', 'Италия', 'Italy'),
                        ('Франция', 'Франция', 'France'),
                        ('Әзірбайжан', 'Азербайджан', 'France'),
                        ('Түрікменстан', 'Туркменистан', 'Turkmenistan'),
                        ('Армения', 'Армения', 'Armenia'),
                        ('Тәжікстан', 'Таджикистан', 'Tajikistan'),
                        ('Қырғызстан', 'Кыргызстан', 'Kyrgyzstan'),
                        ('Моңғолия', 'Монголия', 'Mongolia'),
                        ('Индонезия', 'Индонезия', 'Indonesia'),
                        ('Пакистан', 'Пакистан', 'Pakistan'),
                        ('Таиланд', 'Таиланд', 'Thailand'),
                        ('Швеция', 'Швеция', 'Sweden'),
                        ('Швейцария', 'Швейцария', 'Switzerland'),
                        ('Югославия', 'Югославия', 'Yugoslavia'),
                        ('Венгрия', 'Венгрия', 'Hungary'),
                        ('Бельгия', 'Бельгия', 'Belgium'),
                        ('Австрия', 'Австрия', 'Austria'),
                        ('Италия', 'Италия', 'Italy'),
                        ('Польша', 'Польша', 'Poland');
        ");
    }
};
