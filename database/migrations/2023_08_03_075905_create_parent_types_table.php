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
        Schema::create('parent_types', function (Blueprint $table) {
            $table->id();
            $table->string('parent_type_name_kz', 255)->nullable(false);
            $table->string('parent_type_name_ru', 255)->nullable(false);
            $table->string('parent_type_name_en', 255)->nullable(false);
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
        Schema::dropIfExists('parent_types');
    }
    public function insertData(){
        DB::statement("INSERT INTO parent_types (parent_type_name_kz, parent_type_name_ru, parent_type_name_en) VALUES
                    ('Әке', 'Папа', 'Father'),
                    ('Ана', 'Мама', 'Mother'),
                    ('Қамқоршы', 'Опекун', 'Guardian');
        ");
    }
};
