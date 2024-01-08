<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filePath = public_path('comics.php');
        $comics = include $filePath;   
        

        foreach ($comics as $comicData) {
            Comic::create([
                'title' => $comicData['title'],
                'description' => $comicData['description'],
                'thumb' => $comicData['thumb'],
                'price' => $comicData['price'],
                'series' => $comicData['series'],
                'sale_date' => $comicData['sale_date'],
                'type' => $comicData['type'],
            ]);
        }
    }
}
