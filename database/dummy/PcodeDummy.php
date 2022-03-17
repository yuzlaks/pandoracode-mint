<?php

namespace Database;

use QB;
use Faker\Factory as Faker;

class PcodeDummy{

    public $faker;
    
    public function __construct()
    {

        /* Initial Faker. */
        $this->faker = Faker::create('id_ID');

        /* Call other method. */
        self::data();

    }

    public function data()
    {
        
        for($i=1; $i <= 20; $i++){

            QB::table('siswa')->insert([

                "nama"   => $this->faker->name,
                "alamat" => $this->faker->address
                
            ]);

        }

    }

}