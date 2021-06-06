<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Cat;
use Illuminate\Database\Seeder;


class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['karvane', 'näljane', 'hammastega', 'kodutu', 'suur'];
        foreach ($tags as $tag) {
            Tag::factory()->create(['tag' => $tag]);
        }
    }
}
