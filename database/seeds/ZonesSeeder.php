<?php

use Illuminate\Database\Seeder;
use App\Zone;

class ZonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampleText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $zones = [
        	[
        		'name' => 'Hombro',
        		'slug' => 'Hombro',
	        	'content' => $sampleText,
	        	'description' => $sampleText
	        ],
	        [
        		'name' => 'Brazo',
        		'slug' => 'Brazo',
	        	'content' => $sampleText,
	        	'description' => $sampleText
	        ],
	        [
        		'name' => 'Ante Brazo',
        		'slug' => 'Ante-brazo',
	        	'content' => $sampleText,
	        	'description' => $sampleText
	        ],
	        [
        		'name' => 'Mano',
        		'slug' => 'Mano',
	        	'content' => $sampleText,
	        	'description' => $sampleText
	        ]
        ];
        
        foreach ($zones as $name) {
        	$tissue = new Zone;
        	$tissue->name = $name['name'];
        	$tissue->slug = $name['slug'];
        	$tissue->content = $sampleText;
        	$tissue->description = $sampleText;
        	$tissue->save();
        }

    }
}
