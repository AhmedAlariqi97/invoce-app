<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Counter::factory(1)->create();
        // \App\Models\Products::factory(5)->create();
        // \App\Models\Customers::factory(5)->create();
        // \App\Models\Invoices::factory(5)->create();
        \App\Models\Invoice_Items::factory(5)->create();

        
    }
}
