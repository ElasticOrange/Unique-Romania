<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdminTableSeeder extends Seeder {

    public function run()
    {
        Admin::create([
            'username'  => 'admin'
            , 'password'  => md5('elasticorange')
        ]);
    }

}
