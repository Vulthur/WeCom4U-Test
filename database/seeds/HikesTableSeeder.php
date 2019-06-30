<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hikes')->insert([
            [
                'hike_title' => 'The hidden waterfall',
                'hike_thumbnail_name' => 'todo',
                'hike_difficulty' => 'Normal',
                'hike_component' => 'WaterfallComponent',
                'hike_path_router' => 'Waterfall',
            ],[
                'hike_title' => 'The preacher hike',
                'hike_thumbnail_name' => 'todo',
                'hike_difficulty' => 'Easy',
                'hike_component' => 'PreacherComponent',
                'hike_path_router' => 'Preacher',
            ],[
                'hike_title' => 'Canyoning & kanoé',
                'hike_thumbnail_name' => 'todo',
                'hike_difficulty' => 'Normal',
                'hike_component' => 'CanyoningComponent',
                'hike_path_router' => 'Canyoning',
            ],[
                'hike_title' => 'The trail of the black witch',
                'hike_thumbnail_name' => 'todo',
                'hike_difficulty' => 'Normal',
                'hike_component' => 'BlackWitchComponent',
                'hike_path_router' => 'BlackWitch',
            ],[
                'hike_title' => 'The adventurous kids',
                'hike_thumbnail_name' => 'todo',
                'hike_difficulty' => 'Easy',
                'hike_component' => 'KidsComponent',
                'hike_path_router' => 'Kids',
            ],[
                'hike_title' => 'The raptor ridge',
                'hike_thumbnail_name' => 'mobile_section2_image.jpg',
                'hike_difficulty' => 'Hard',
                'hike_component' => 'HikeRaptorComponent',
                'hike_path_router' => 'HikeRaptor',
            ]
        ]);
    }
}
