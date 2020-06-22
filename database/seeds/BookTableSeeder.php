<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'bookName' => 'book1',
            'author_id' => 2,
            'numberOfPages' => 120,
            'publisher' => 'keyhan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('books')->insert([
            'bookName' => 'book2',
            'author_id' => 2,
            'numberOfPages' => 100,
            'publisher' => 'keyhan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('books')->insert([
            'bookName' => 'book3',
            'author_id' => 1,
            'numberOfPages' => 100,
            'publisher' => 'keyhan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('books')->insert([
            'bookName' => 'book4',
            'author_id' => 3,
            'numberOfPages' => 60,
            'publisher' => 'keyhan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('books')->insert([
            'bookName' => 'book5',
            'author_id' => 3,
            'numberOfPages' => 258,
            'publisher' => 'keyhan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('books')->insert([
            'bookName' => 'book6',
            'author_id' => 3,
            'numberOfPages' => 123,
            'publisher' => 'keyhan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('books')->insert([
            'bookName' => 'book7',
            'author_id' => 3,
            'numberOfPages' => 400,
            'publisher' => 'keyhan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
