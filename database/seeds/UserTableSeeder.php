<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $faker = Faker\Factory::create();
         
     for($i = 0; $i < 10000; $i++) {
        App\Clientes::create([
            'nome' => $faker->name,
            'cnpj' => $faker->numberBetween(00000000001, 99999999999),
            'user_id' => 1
        ]);
        
        echo "Registro (". $i .") Cadastrado" . "\n";
    }


    }
}
