<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Paket Hype',
                'slug' => 'paket-hype',
                'price' => 370,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Paket Pemula',
                'slug' => 'paket-bayi',
                'price' => 220,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];


        // 1st method
        // foreach ($camps as $key => $camp){
        //     Camp::create($camp);
        // }

        // 2nd method *timestamp menjadi tidak otomatis
        Camp::insert($camps);
    }
}
