<?php

namespace Database\Seeders;

use App\Models\Laundry;
use Illuminate\Database\Seeder;

class LaundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laundry::create([
            'nama'      => 'Erik Laundry',
            'alamat'    => 'Jalan Pahlawan',
            'telepon'   => '08123456789'
        ]);
        Laundry::create([
            'nama'      => 'Android Laundry',
            'alamat'    => 'Jalan Google Developer',
            'telepon'   => '123456789'
        ]);
    }
}
