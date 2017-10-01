<?php

use Illuminate\Database\Seeder;

class YoutubeVideosTablSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('youtubevideos')->delete();
        
        \DB::table('youtubevideos')->insert(array (
            0 => 
            array (
                'titre' => 'المغرب: دور المجتمع المدني في الوحدة الإفريقية',
                'value' => 'tVHHexpCoCQ',
            ),
            1 => 
            array (
                'titre' => 'Caravane de la paix du dialogue interculturel et de l\'integration',
                'value' => 'YradtwO7I6Y',
            ),
            2 => 
            array (
                'titre' => 'بمناسبة ذكرى ثورة الملك والشعب “مفتاح السلام” تنظم قافلة تضامنية بآيت حساين اوحدو',
                'value' => 'QGf5d4WYXKI',
            ),
            3 => 
            array (
                'titre' => 'مفتاح السلام تتضامن مع ساكنة أيت حساين احدو بإقليم بولمان',
                'value' => 'bL0JtL0hs8A',
            ),
            4 => 
            array (
                'titre' => 'جمعية مفتاح السلام تتضامن مع ساكنة أيت حساين احدو بإقليم بولمان',
                'value' => '2zhuDY6xRVc',
            ),
            5 => 
            array (
                'titre' => 'إحداث أكاديمية إفريقية لكرة القدم بالمغرب',
                'value' => 'tTTH0DeDhAE',
            ),
            6 => 
            array (
                'titre' => 'نجوم عالميون في افتتاح أكاديمية لكرة القدم بمكناس',
                'value' => '9eNOzZf_5fk',
            ),
            7 => 
            array (
                'titre' => 'تعرف على تفاصيل إطلاق الأكاديمية "بانا إفريقية" لكرة القدم',
                'value' => 'rzigGBKCHdc',
            ),
            8 => 
            array (
                'titre' => 'هذا ما قاله "روجي ميلا" عن قدرة المغرب على تنظيم "كأس العالم"',
                'value' => 'wEhDevHOtsI',
            ),
            9 => 
            array (
                'titre' => 'روجي ميلا لـ"الأيام24": بكيت بعد وفاة الظلمي',
                'value' => 's7vEjRV7hoE',
            ),
            10 => 
            array (
                'titre' => 'académie africaine sportive',
                'value' => 'IPwXHhO4vlY',
            ),
            11 => 
            array (
                'titre' => 'قناة الامازيغية واكبت اليوم الدراسي لمفتاح السلام الدولية لاعداد قافلة السلم والسلام نحو أديس أبابا',
                'value' => 'PDbWoQqdxZ4',
            ),
            12 => 
            array (
                'titre' => 'انطلاق قافلة تضامنية من مكناس إلى أديس أبابا مرورا ب 15 دولة افريقية',
                'value' => 'DdrsQML1408',
            ),
            13 => 
            array (
                'titre' => 'جمعية مفتاح السلام الدولية للتنمية والتضامن تنظم قافلة افريقيا',
                'value' => 'pq8gmUloOyY',
            ),
            14 => 
            array (
                'titre' => 'جمعية مفتاح السلام الدولية بتنسيق مع جمعية انوار وحمعية أصيكما نظمت افطارا جماعيا للافارقة',
                'value' => '68HizFLqV5s',
            ),
            15 => 
            array (
                'titre' => 'المغرب يربط جسور التواصل مع إفريقيا',
                'value' => 'RnN_3bsatMs',
            ),
            16 => 
            array (
                'titre' => 'الجمع العام التأسيسي للمجلس الاستشاري للشباب الإفريقي',
                'value' => 'aHyMbCezcBY',
            ),
            17 => 
            array (
                'titre' => 'جمعية مفتاح السلام والملتقى الأول للحوار والإستثمارالإفريقي بالرباط',
                'value' => '2rCXt5IcDTA',
            ),
            18 => 
            array (
                'titre' => 'الجمع العام التأسيسي للمجلس الاستشاري للشباب الإفريقي',
                'value' => 'w4ldjJ6ZYig',
            ),
            19 => 
            array (
                'titre' => 'فيديو يعرض تأسيس مجلس استشاري للأفارقة بالرباط',
                'value' => '-J0C_zkd0c8',
            ),
        ));
    }
}
