<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Review;



class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->truncate();
        $review  = new Review();
        $review->service_rating=2;
        $review->quality_rating=4;
        $review->cleanliness_rating=5;
        $review->pricing_rating=3;
        $review->place_id=2;
        $review->user_id=1;
        $review->save();
        
        $review  = new Review();
        $review->service_rating=3;
        $review->quality_rating=2;
        $review->cleanliness_rating=1;
        $review->pricing_rating=5;
        $review->place_id=1;
        $review->user_id=2;
        $review->save();

        
    }
}
