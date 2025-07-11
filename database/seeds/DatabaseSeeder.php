<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HiveLayerCategorySeeder::class);
        $this->call(DeviceCorrectionSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(MeasurementSeeder::class);
    }
}
