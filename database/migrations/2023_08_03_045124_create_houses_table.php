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
        Schema::create('houses', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->integer('house_official_number');
            $table->integer('house_payment');
            $table->string('house_address_kz');
            $table->string('house_address_ru');
            $table->string('house_address_en');
            $table->text('house_link');
            $table->integer('house_floor_count');
            $table->integer('house_area');
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
        Schema::dropIfExists('houses');
    }

    private function insertData()
    {
        DB::table('houses')->insert([
            [
                'house_official_number' => 1,
                'house_address_kz' => 'Бөгенбай батыр көшесі, 157',
                'house_address_ru' => 'улица Богенбай батыра, 157',
                'house_address_en' => 'Bogenbai Batyr street, 157',
                'house_link' => 'https://go.2gis.com/zs25u7',
                'house_floor_count' => 9,
                'house_area' => 7405,
                'house_payment' => 120000,
                'active' => true,
            ],[
                'house_official_number' => 2,
                'house_address_kz' => 'Многоводная көшесі, 4а/А',
                'house_address_ru' => 'улица Многоводная, 4а/А',
                'house_address_en' => 'Mnogovodnaya street, 4а/А',
                'house_link' => 'https://go.2gis.com/apa4a1',
                'house_floor_count' => 5,
                'house_area' => 5250,
                'house_payment' => 150000,
                'active' => true,
            ],[
                'house_official_number' => 2,
                'house_address_kz' => 'Многоводная көшесі, 4а/Б',
                'house_address_ru' => 'улица Многоводная, 4а/Б',
                'house_address_en' => 'street Mnogovodnaya, 4a/B',
                'house_link' => 'https://go.2gis.com/apa4a1',
                'house_floor_count' => 5,
                'house_area' => 4965,
                'house_payment' => 150000,
                'active' => true,
            ],[
                'house_official_number' => 3,
                'house_address_kz' => 'Торайғыров көшесі, 53',
                'house_address_ru' => 'улица Торайгырова, 53',
                'house_address_en' => 'street Toraigyrov, 53',
                'house_link' => 'https://go.2gis.com/4uori8',
                'house_floor_count' => 5,
                'house_area' => 4570,
                'house_payment' => 100000,
                'active' => true,
            ],[
                'house_official_number' => 4,
                'house_address_kz' => 'Әйтиев көшесі, 96',
                'house_address_ru' => 'улица Айтиева, 96',
                'house_address_en' => 'Aitiev street, 96',
                'house_link' => 'https://go.2gis.com/we3mi4',
                'house_floor_count' => 5,
                'house_area' => 5105,
                'house_payment' => 180000,
                'active' => true,
            ]
        ]);
    }

};
