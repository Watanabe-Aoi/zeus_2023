<?php

namespace Database\Seeders;

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
        $orders = [
            [   // 1
                'description' => '注文その1です。',
                'total_price' => 100,
            ],
            [   // 2
                'description' => '注文その2です。',
                'total_price' => 200,
            ],
            [   // 3
                'description' => '注文その3です。',
                'total_price' => 300,
            ],
        ];

        // レコード自動挿入
        foreach($orders as $order) {
            \DB::table('orders')->insert($order);
        }
    }
}
