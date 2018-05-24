<?php

use Illuminate\Database\Seeder;

class ReviewSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('reviews')->insert([
[
   "name" => "Anton",
   "comment" => "Döda lite troll är alltid kul",
   "grade" => 5,
   "product_id" => 1
],
[
   "name" => "Johan",
   "comment" => "Balders balle va kul detta var!",
   "grade" => 5,
   "product_id" => 1
],
[
   "name" => "Johan",
   "comment" => "Den är helt okej!",
   "grade" => 3,
   "product_id" => 2
],
[
   "name" => "Anton",
   "comment" => "Mysigt men irriterande kontrollers",
   "grade" => 4,
   "product_id" => 2
],
[
   "name" => "Anton",
   "comment" => "Episkt",
   "grade" => 5,
   "product_id" => 3
],
[
   "name" => "Johan",
   "comment" => "Sjukt mäktigt",
   "grade" => 4,
   "product_id" => 3
],
[
   "name" => "Johan",
   "comment" => "Asså nej dumma fågelhund",
   "grade" => 3,
   "product_id" => 4
],
[
   "name" => "Anton",
   "comment" => "Klart bättre än förväntat!",
   "grade" => 4,
   "product_id" => 4
]
]);
    }
}
