<?php

use Illuminate\Database\Seeder;
use App\Response;

class ResponsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Response::class, 100)->create();
    }
}
