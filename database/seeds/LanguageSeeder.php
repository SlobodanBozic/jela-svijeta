<?php

use Illuminate\Database\Seeder;



class LanguageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $items = [

            ['title' => 'Engleski jezik', 'slug' => 'engleski-jezik', 'lang' => 'en',],
            ['title' => 'Hrvatski jezik', 'slug' => 'hrvatski-jezik', 'lang' => 'hr',],
            ['title' => 'Njemački jezik', 'slug' => 'njemacki-jezik', 'lang' => 'de',],

        ];

        foreach ($items as $item) {
            \App\Language::create($item);
        }
    }
}
