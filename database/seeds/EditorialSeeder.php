<?php

use Illuminate\Database\Seeder;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editoriales=factory(App\Models\Editorial::class,5)
        ->create()
        ->each(function($editorial){
            $editorial->editores()->save(factory(App\Models\Editor::class)->make());  
        });
    }
}
