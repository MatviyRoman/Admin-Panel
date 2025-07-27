<?php

namespace Database\Seeders;

use App\Models\Characteristic;
use App\Models\CharacteristicCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacteristicDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category1 = CharacteristicCategory::firstOrCreate(['name' => 'General Product Specs']);
        $category2 = CharacteristicCategory::firstOrCreate(['name' => 'Technical Details']);

        $category1->characteristics()->firstOrCreate(
            ['name' => 'Has Bluetooth'],
            ['meta_data' => ['description' => 'true', 'type' => 'boolean']]
        );

        $category1->characteristics()->firstOrCreate(
            ['name' => 'Weight'],
            ['meta_data' => ['description' => '500', 'type' => 'integer']]
        );

        $category1->characteristics()->firstOrCreate(
            ['name' => 'Color'],
            ['meta_data' => ['description' => 'Red', 'type' => 'string']]
        );

        $category2->characteristics()->firstOrCreate(
            ['name' => 'Processor Speed'],
            ['meta_data' => ['description' => '2.5 GHz', 'type' => 'string']]
        );

        $category2->characteristics()->firstOrCreate(
            ['name' => 'RAM'],
            ['meta_data' => ['description' => '8', 'type' => 'integer']]
        );
    }
}
