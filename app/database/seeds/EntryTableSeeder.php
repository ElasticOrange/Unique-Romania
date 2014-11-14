<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EntryTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 50) as $index)
        {
            // Create the user
            $user = User::create([
                'facebook_id' => rand(1, 1000000)
                , 'name' => $faker->name
            ]);

            // Create the entry
            $entry_data = [
                'article' => []
                , 'pictures' => []
                , 'video' => ''
                , 'approved' => (rand(0, 2) == 1) ? true : false
                , 'name' => $faker->name
                , 'email' => $faker->email
                , 'phone' => $faker->phoneNumber
            ];

            if (rand(0, 2) == 1)
            {
                $entry_data['article']['title'] = $faker->sentence(3);
                $entry_data['article']['content'] = $faker->text;
            }

            if (rand(0, 2) == 1)
            {
                foreach(range(0, rand(0, 10)) as $p_index)
                {
                    $entry_data['pictures'][] = $faker->imageUrl(rand(400, 1024), rand(400, 1024));
                }
            }

            if (rand(0, 2) == 1)
            {
                $entry_data['video'] = '//www.youtube.com/embed/AJJ353epH3o';
            }

            $entry = Entry::create($entry_data);

            // Connect the user and the entry
            $user->entry()->save($entry);
        }
    }

}
