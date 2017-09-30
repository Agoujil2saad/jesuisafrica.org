<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'photo' => 'event1.jpg',
                'lien' => 'http://www.hibapress.com/details-122278.html',
                'date' => '13/09/2017',
                'description' => 'تنظم جمعية مفتاح السلام الدولية للتنمية والتضامن بشراكة مع المجلس الاستشاري للشباب الإفريقي و إدارة ملتقى الحوار والاستثمار الإفريقي،قافلة ثقافية ستجوب عدة دول افريقية تحمل اسم “السلم والسلام” و التي ستنظم بمناسبة احتفالات الشعب المغربي بعيد المسيرة الخضراء المظفرة',
                'created_at' => '2017-09-30 20:38:29',
                'updated_at' => '2017-09-30 20:38:29',
            ),
            1 => 
            array (
                'photo' => 'event2.jpg',
                'lien' => 'http://www.hibapress.com/details-122278.html',
                'date' => '04/09/2017',
                'description' => 'حتفل اعضاء المجلس الاستشاري للشاب الافريقي التابع  لجمعية مفتاح السلام الدولية للتنمية والتضامن بالامس في مقر الجمعية بالرباط ،بعيد الاضحى في أجواء من الفرح والتعايش بين الديانات الثلاثة ،',
                'created_at' => '2017-09-30 20:39:53',
                'updated_at' => '2017-09-30 20:39:53',
            ),
            2 => 
            array (
                'photo' => 'event3.jpg',
                'lien' => 'http://alakhbar24.net/3798-2',
                'date' => '29/08/2017',
                'description' => '“مفتاح السلام” تنظم قافلة تضامنية بآيت حساين اوحدو بمناسبة ذكرى ثورة الملك والشعب',
                'created_at' => '2017-09-30 20:40:25',
                'updated_at' => '2017-09-30 20:40:25',
            ),
            3 => 
            array (
                'photo' => 'event4.jpg',
                'lien' => 'http://www.marocbuzz.com/ar/2017/08/24/%D8%B4%D8%B1%D9%83%D8%A9-%D8%A3%D9%84%D9%85%D8%A7%D9%86%D9%8A%D8%A9-%D9%83%D8%A8%D8%B1%D9%89-%D8%AA%D8%AF%D8%B9%D9%85-%D9%85%D8%B4%D8%B1%D9%88%D8%B9-%D8%A7%D9%84%D8%A3%D9%83%D8%A7%D8%AF%D9%8A%D9%85/',
                'date' => '24/08/2017',
                'description' => 'شركة ألمانية كبرى تدعم مشروع الأكاديمية الإفريقية لكرة القدم في مكناس',
                'created_at' => '2017-09-30 20:41:29',
                'updated_at' => '2017-09-30 20:41:29',
            ),
        ));
        
        
    }
}