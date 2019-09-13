<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(EmpleadoSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(EditorialSeeder::class);
        //$this->call(CursoSeeder::class);
    }
}
