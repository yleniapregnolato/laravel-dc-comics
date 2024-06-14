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
            $newComic->titolo = $item['title'];
            $newComic->descrizione = $item['description'];
            $newComic->immagine = $item['thumb'];
            $newComic->prezzo = $item['price'];
            $newComic->serie = $item['series'];
            $newComic->data_vendita = $item['sale_date'];
            $newComic->tipo = $item['type'];
            $newComic->save();
        }
    }
}
