<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class WordSeeder extends Seeder {
    public function run() {
        $file_path = public_path('admin/word/word.sql');
        DB::unprepared(
            file_get_contents($file_path)
        );
    }
}
