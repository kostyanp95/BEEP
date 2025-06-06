<?php

use Illuminate\Database\Seeder;
use App\Category;

class HiveLayerCategorySeeder extends Seeder
{
    public function run()
    {
        $parentId = Category::where('type', 'system')->where('name', 'hive_layer')->value('id');
        if (!$parentId) {
            return;
        }

        $layers = ['honey', 'brood', 'queen_excluder', 'feeding_box'];
        foreach ($layers as $name) {
            Category::firstOrCreate(
                [
                    'name'      => $name,
                    'type'      => 'hive_layer',
                    'parent_id' => $parentId,
                ]
            );
        }
    }
}
