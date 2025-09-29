<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert(
            [
                [
                    'title' => 'Logical Fallacy',
                    'author' => 'Muhammad Nuruddin',
                    'year' => 2023,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Atomic Habits',
                    'author' => 'James Clear',
                    'year' => 2018,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Clean Code',
                    'author' => 'Robert C. Martin',
                    'year' => 2008,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'The Pragmatic Programmer',
                    'author' => 'Andrew Hunt',
                    'year' => 1999,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Refactoring',
                    'author' => 'Martin Fowler',
                    'year' => 1999,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ],
        );
    }
}
