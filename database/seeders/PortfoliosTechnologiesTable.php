<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use App\Models\Technology;

class PortfoliosTechnologiesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolio = Portfolio::inRandomOrder()->first();

        $technology_id = Technology::inRandomOrder()->first()->id;

        $portfolio->technologies()->attach($technology_id);
    }
}
