<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Book extends Seeder {
    public function run()
    {
        DB::table('books')->insert([
            'id' => "1",
            'title' => "In the Other Side",
            'author' => "Trévor Stuart",
            'publication_year' => "10.12.95",
            'genre' => "fantasy",
            'synopsis' => "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...",
        ]);
    }
}
