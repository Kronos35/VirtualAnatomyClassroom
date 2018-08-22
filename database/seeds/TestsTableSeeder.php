<?php

use App\Test;
use App\Group;
use App\Option;
use App\Question;
use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
    /**
     * Create tests for each group stored in the database.
     */
    public function createTestsForGroup($groups)
    {
    	$due_at = date("Y-m-d", strtotime("+1 week"));
        $dummy_text = 'Lorem ipsum dolor amet cardigan forage direct trade portland scenester venmo next level subway tile enamel pin salvia la croix edison bulb knausgaard viral. Ugh aesthetic chillwave, trust fund ennui helvetica put a bird on it cliche tacos brooklyn vaporware. Retro sustainable brunch stumptown adaptogen poutine schlitz snackwave chia hammock craft beer. Stumptown selfies chillwave tbh.';
	    foreach ($groups as $group) {
	        $testsData = [
	        	[
	        		'name' => 'Basic Anatomy',
	        		'description' => $dummy_text,
	        		'instructions' => $dummy_text,
	        		'group_id' => $group->id,
	        		'due_at' => $due_at
	        	],
	        	
	        	[
	        		'name' => 'Intermediate Anatomy',
	        		'description' => $dummy_text,
	        		'instructions' => $dummy_text,
	        		'group_id' => $group->id,
	        		'due_at' => $due_at
	        	],
	        	
	        	[
	        		'name' => 'Advanced Anatomy',
	        		'description' => $dummy_text,
	        		'instructions' => $dummy_text,
	        		'group_id' => $group->id,
	        		'due_at' => $due_at
	        	],
	        ];

	        foreach ($testsData as $data) {
	        	$test = Test::create($data);
	        	$this->createQuestion($test);
	        }

	    }
    }

    /**
     * Create questions for each test.
     */
    public function createQuestion($test)
    {
    	$dummy_body = 'Semiotics kogi migas, seitan salvia pok pok vexillologist marfa wayfarers biodiesel direct trade cloud bread +1. Raclette mustache health goth chicharrones, XOXO celiac glossier hoodie 8-bit.';
		
		$questions_data = [
    		[
    			'body' => $dummy_body,
    		    'test_id' => $test->id
    		],

    		[
    			'body' => $dummy_body,
    		    'test_id' => $test->id
    		],

    		[
    			'body' => $dummy_body,
    		    'test_id' => $test->id
    		],

    		[
    			'body' => $dummy_body,
    		    'test_id' => $test->id
    		],

    		[
    			'body' => $dummy_body,
    		    'test_id' => $test->id
    		],

    	];
    	foreach ($questions_data as $question_data) {
    		$question = Question::create($question_data);
    		$this->createOptions($question);
    	}
    }

	/**
     * Create options for a question
     */
    public function createOptions($question)
    {
    	$dummy_body = 'Seitan salvia pok pok vexillologist marfa wayfarers biodiesel direct trade cloud bread +1. Raclette mustache health goth chicharrones, XOXO celiac glossier hoodie 8-bit.';
		
		$options_data = [

    		[
    			'body' => 'Yes',
    			'is_answer' => true,
    		    'question_id' => $question->id
    		],
    		
    		[
    			'body' => 'No',
    			'is_answer' => false,
    		    'question_id' => $question->id
    		],

    	];
    	foreach ($options_data as $option_data) {
    		$question = Option::create($option_data);
    	}
    }

    /**
     * Run the database seeds.
     */
    public function run()
    {
		$groups = Group::all();
		$this->createTestsForGroup($groups);
    }
}
