<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ReviewSeed::class);
        $this->call(ProductStoreSeed::class);
        $this->call(ProductTableSeed::class);
        $this->call(StoreTableSeed::class);



    }
}
