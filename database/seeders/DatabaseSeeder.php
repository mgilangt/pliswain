<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->runSqlFile('countries.sql');
    }

    protected function runSqlFile($filename)
    {
        $path = database_path('seeders/'.$filename);
        
        if (!File::exists($path)) {
            throw new \Exception("File SQL tidak ditemukan: {$filename}");
        }
        
        $sql = File::get($path);
        
        // Eksekusi per query (untuk menghindari error pada multi query)
        collect(explode(';', $sql))
            ->filter(function ($query) {
                return strlen(trim($query)) > 0;
            })
            ->each(function ($query) {
                DB::statement($query);
            });
    }
}
