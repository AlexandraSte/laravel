<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'customer_name' => 'Иван Иванов',
                'email' => 'tamerlan.s@gmail.com',
                'phone' => '8-066-356-85-75',
                'feedback' => 'Товар качественный',
                'created_at' => date('Y-m-d H:i')
            ],
            [
                'customer_name' => 'Степанов Тамерлан',
                'email' => 'tn.s@gmail.com',
                'phone' => '8-265-859-96-74',
                'feedback' => 'Товар доставлен вовремя',
                'created_at' => date('Y-m-d H:i')

            ],
        ]);
    }
}
