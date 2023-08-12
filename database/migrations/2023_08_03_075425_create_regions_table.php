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
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('region_name_kz', 255)->nullable(false);
            $table->string('region_name_ru', 255)->nullable(false);
            $table->string('region_name_en', 255)->nullable(false);
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
        Schema::dropIfExists('regions');
    }

    public function insertData(){
        DB::statement("INSERT INTO regions (region_name_kz, region_name_ru, region_name_en) VALUES
                    ('Абай облысы', 'Абайская область', 'Abai region'),
                    ('Ақмола облысы', 'Акмолинская область', 'Akmola region'),
                    ('Ақтөбе облысы', 'Актюбинская область', 'Aktobe region'),
                    ('Алматы облысы', 'Алматинская область', 'Almaty region'),
                    ('Атырау облысы', 'Атырауская область', 'Atyrau region'),
                    ('Батыс-Қазақстан облысы', 'Западно-Казахстанская область', 'West-Kazakhstan region'),
                    ('Жамбыл облысы', 'Жамбылская область', 'Jambyl region'),
                    ('Жетісу облысы', 'Жетысуская область', 'Jetisu region'),
                    ('Қарағанды облысы', 'Карагандинская область', 'Karaganda region'),
                    ('Қостанай облысы', 'Костанайская область', 'Kostanay region'),
                    ('Қызылорда облысы', 'Кызылординская область', 'Kyzylorda region'),
                    ('Маңғыстау облысы', 'Мангистауская область', 'Mangystau region'),
                    ('Павлодар облысы', 'Павлодарская область', 'Pavlodar region'),
                    ('Солтүстік-Қазақстан облысы', 'Северо-Казахстанская область', 'North-Kazakhstan region'),
                    ('Түркістан облысы', 'Туркестанская область', 'Turkistan region'),
                    ('Ұлытау облысы', 'Улытауская область', 'Ulytau region'),
                    ('Шығыс-Қазақстан облысы', 'Восточно-Казахстанская область', 'East-Kazakhstan region'),
                    ('Алматы қаласы', 'город Алматы', 'Almaty city'),
                    ('Астана қаласы', 'город Астана', 'Astana city'),
                    ('Шымкент қаласы', 'город Шымкент', 'Shymkent city');
        ");
    }
};
