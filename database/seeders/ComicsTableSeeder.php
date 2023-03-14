<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\Comic;


class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Recupero file da config
        $comics = config("comics");

        //Inseriamo i dati nel DB
        foreach ($comics as $index => $comic) {
            $newComic = new Comic;
            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->price = $comic["price"];
            $newComic->series = $comic["series"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->type = $comic["type"];
            $newComic->save();
        }
    }
}
