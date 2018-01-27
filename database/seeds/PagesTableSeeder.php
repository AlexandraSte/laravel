<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert(
            [
                'title' => 'Одежда для женщин',
                'alias' => 'Clothing for woman',
                'intro' => 'Огромный выбор одежды для женщин.',
                'content' => 'Все размеры.'
            ]


        );
    }
}
