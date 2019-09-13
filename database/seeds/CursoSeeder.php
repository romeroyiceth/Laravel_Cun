<?php

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    public function run()
    {

        $curso=factory(App\Models\Curso::class,5)
      ->create()
      ->each(function($curso){
       
        /* $curso->clases()->save($factoryclase=factory(App\Models\Clase::class)->make());  
       $factoryclase->programas()->save(factory(App\Models\Programa::class)->make()); */
       
       $clase=factory(App\Models\Clase::class)->make(); 
        $curso->clases()->save($clase);
        $clase->programas()->save(factory(App\Models\Programa::class)->make());

      });

    }
}

