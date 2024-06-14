<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('comic');
        foreach ($data as $item) {
            $newComic = new Comic();
            $newComic->title = $item['title'];
            $newComic->desciption = $item['description'];
            $newComic->thumb = $item['thumb'];
            $newComic->price = $item['price'];
            $newComic->series = $item['series'];
            $newComic->sale_date = $item['sale_date'];
            $newComic->type = $item['type'];
            $newComic->save();
        }
    }
}
