<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->truncate();
        $place  = new Place();
        $place->name="سوق مكة";
        $place->slug="سوق مكة";
        $place->image="1.jpeg";
        $place->category_id=3;
        $place->overview="مساحة تعبئة زمزم";
        $place->address="الطريق الدائري الثالث حي كدي";
        $place->user_id=1;
        $place->latitude=21.3924513;
        $place->longitude=39.8226124;
        $place->view_count=3;
        $place->save();

        $place  = new Place();
        $place->name="مطعم مكة";
        $place->slug="مطعم مكة";
        $place->image="1.jpeg";
        $place->category_id=2;
        $place->overview="بخاري مشاوي";
        $place->address="الطريق الدائري الثالث حي كدي";
        $place->user_id=2;
        $place->latitude=22.3924513;
        $place->longitude=36.8226124;
        $place->view_count=5;
        $place->save();

        $place  = new Place();
        $place->name="مستشفى مكة";
        $place->slug="مستشفى مكة";
        $place->image="1.jpeg";
        $place->category_id=5;
        $place->overview="مساحة البشري";
        $place->address="الطريق الدائري الثالث حي كدي";
        $place->user_id=3;
        $place->latitude=23.3924513;
        $place->longitude=38.8226124;
        $place->view_count=4;
        $place->save();
    }
}
