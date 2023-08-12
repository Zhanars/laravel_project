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
        Schema::create('nations', function (Blueprint $table) {
            $table->id();
            $table->string('nation_name_kz');
            $table->string('nation_name_ru');
            $table->string('nation_name_en');
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
        Schema::dropIfExists('nations');
    }

    private function insertData()
    {
        DB::table('nations')->insert([
            [
                'nation_name_kz' => 'қазақ',
                'nation_name_ru' => 'казах/казашка',
                'nation_name_en' => 'kazakh',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'орыс',
                'nation_name_ru' => 'русский/русская',
                'nation_name_en' => 'russion',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'украин',
                'nation_name_ru' => 'украинец/украинка',
                'nation_name_en' => 'ukrainian',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'кәріс',
                'nation_name_ru' => 'кореец/кореянка',
                'nation_name_en' => 'korean',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'өзбек',
                'nation_name_ru' => 'узбек/узбечка',
                'nation_name_en' => 'uzbek',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'мордвин',
                'nation_name_ru' => 'мордвин/мордовка',
                'nation_name_en' => 'mordvinian',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'неміс',
                'nation_name_ru' => 'немец/немка',
                'nation_name_en' => 'german',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'татар',
                'nation_name_ru' => 'татарин/татарка',
                'nation_name_en' => 'tatar',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'поляк',
                'nation_name_ru' => 'поляк/полька',
                'nation_name_en' => 'pole',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'румын',
                'nation_name_ru' => 'румын/румынка',
                'nation_name_en' => 'rumanian',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'молдаван',
                'nation_name_ru' => 'молдаванин/молдаванка',
                'nation_name_en' => 'moldavian',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'белорус',
                'nation_name_ru' => 'белорус/белоруска',
                'nation_name_en' => 'belorussian',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'әзірбайжан',
                'nation_name_ru' => 'азербайджанец/азербайджанка',
                'nation_name_en' => 'azerbaijanian',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'армян',
                'nation_name_ru' => 'арменин/армянка',
                'nation_name_en' => 'armenian',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'ингуш',
                'nation_name_ru' => 'ингуш/ингушка',
                'nation_name_en' => 'ingush',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'чечен',
                'nation_name_ru' => 'чеченец/чеченка',
                'nation_name_en' => 'chechen',
                'active' => true,
            ],
            [
                'nation_name_kz' => 'басқа',
                'nation_name_ru' => 'другая',
                'nation_name_en' => 'other',
                'active' => true,
            ]
        ]);
    }
};
