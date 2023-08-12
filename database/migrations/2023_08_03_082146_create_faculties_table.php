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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->string('faculty_name_kz', 150);
            $table->string('faculty_name_ru', 150);
            $table->string('faculty_name_en', 150);
            $table->string('faculty_shortname_kz', 15);
            $table->string('faculty_shortname_ru', 15);
            $table->string('faculty_shortname_en', 15);
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
        Schema::dropIfExists('faculties');
    }
    public function insertData(){
        DB::statement("INSERT INTO faculties (faculty_name_kz, faculty_name_ru, faculty_name_en, faculty_shortname_kz,  faculty_shortname_ru,  faculty_shortname_en) VALUES
                        ('Тағам технологиялары факультеті', 'Факультет пищевых технологий', 'Faculty of Food Technologies', 'ТТФ', 'ФПТ', 'FFP'),
                        ('Тоқыма және киім технологиялары дизайн факультеті', 'Факультет дизайна технологий текстиля и одежды', 'Faculty of Design Technologies of Textiles and Clothing', 'ТКТДФ', 'ФДТТиО', 'FDTTC'),
                        ('Инженеринг және ақпараттық технологиялар факультеті', 'Факультет инженеринга и информационных технологий', 'Faculty of Engineering and Information Technology', 'ИАТФ', 'ФИиИТ', 'FEIT'),
                        ('Экономика және бизнес факультеті', 'Факультет экономики и бизнеса', 'Faculty of Economics and Business', 'ЭБФ', 'ФЭиБ', 'FEB'),
                        ('Қашықтықтан оқыту факультеті', 'Факультет дистанционного образования', 'Faculty of Distance Education', 'ҚОФ', 'ФДО', 'FDE'),
                        ('Жоғары оқу орнынан кейінгі білім беру басқармасы', 'Управление послевузовского образования', 'Management of Postgraduate Education', 'ЖООКБББ', 'УПО', 'MPE'),
                        ('Алматы технологиялық-экономикалық колледжі', 'Алматинский технолого-экономический колледж', 'Almaty Technology and Economics College', 'АТЭК', 'АТЭК', 'ATEC');
        ");
    }
};
