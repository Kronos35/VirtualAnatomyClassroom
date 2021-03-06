<?php

use App\Group;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = User::where('name', 'Teacher')->first();
        // UACJ dummy group
        
        $group = new Group;
        $group->name = "Dummy group";
        $group->description = "Lorem ipsum dolor amet four dollar toast craft beer master cleanse, adaptogen tbh tumblr cold-pressed. Cold-pressed knausgaard live-edge, fashion axe keffiyeh kogi hot chicken prism succulents bushwick vaporware tofu. Cardigan snackwave shoreditch, you probably haven't heard of them ennui distillery put a bird on it vegan. Adaptogen gentrify twee fingerstache salvia keffiyeh. Cliche church-key viral hexagon flannel. Shabby chic gochujang ennui master cleanse franzen tbh aesthetic copper mug ethical pug literally sriracha williamsburg organic.";
        $group->user_id = $teacher->id;
        $group->account_id = 1;
        $group->save();

        $group = new Group;
        $group->name = "Dummy Anatomy Group";
        $group->description = "Lorem ipsum dolor amet four dollar toast craft beer master cleanse, adaptogen tbh tumblr cold-pressed. Cold-pressed knausgaard live-edge, fashion axe keffiyeh kogi hot chicken prism succulents bushwick vaporware tofu. Cardigan snackwave shoreditch, you probably haven't heard of them ennui distillery put a bird on it vegan. Adaptogen gentrify twee fingerstache salvia keffiyeh. Cliche church-key viral hexagon flannel. Shabby chic gochujang ennui master cleanse franzen tbh aesthetic copper mug ethical pug literally sriracha williamsburg organic.";
        $group->user_id = $teacher->id;
        $group->account_id = 1;
        $group->save();

        $students = User::where('name', 'LIKE', '%Student%')->get();
        foreach ($students as $student) {
            DB::table('user_group')->insert([
                'user_id' => $student->id,
                'group_id' => 1
            ]);

            DB::table('user_group')->insert([
                'user_id' => $student->id,
                'group_id' => 2
            ]);
        }

        $user_group = DB::table('user_group')->first();
    }
}
