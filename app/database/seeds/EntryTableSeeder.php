<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EntryTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 50) as $index)
        {
            $entry = [
                'article' => []
                , 'pictures' => []
                , 'videos' => []
                , 'approved' => true
            ];

            if (rand(0, 2) == 1)
            {
                $entry['article']['title'] = $faker->sentence(3);
                $entry['article']['content'] = $faker->text;
            }

            if (rand(0, 2) == 1)
            {
                foreach(range(0, rand(0, 10)) as $p_index)
                {
                    $entry['pictures'][] = $faker->imageUrl(rand(400, 1024), rand(400, 1024));
                }
            }

            if (rand(0, 2) == 1)
            {
                foreach(range(0, rand(0, 5)) as $v_index)
                {
                    $entry['videos'][] = 'https://www.youtube.com/watch?v=JykAcR6V0bE';
                }
            }

            Entry::create($entry);
        }
    }

}
