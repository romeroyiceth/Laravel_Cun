<?php

use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'numero_cedula' => '111',
            'nombre'=> 'angel ',
            'apellido'=> 'medina castro',
            'email'=>'angel.medida@gmail.com',
            'telefono'=> '321567899'
        ]);
        DB::table('empleados')->insert([
            'numero_cedula' => '112',
            'nombre'=> 'maria sofia ',
            'apellido'=> 'lopez herrera',
            'email'=>'sofia.lopez@gmail.com',
            'telefono'=> '321566587'
        ]);
        DB::table('empleados')->insert([
            'numero_cedula' => '113',
            'nombre'=> 'carolina ',
            'apellido'=> 'perez sanchez',
            'email'=>'catolina.perez@gmail.com',
            'telefono'=> '311566521'
        ]);
        DB::table('empleados')->insert([
            'numero_cedula' => '114',
            'nombre'=> 'tatiana ',
            'apellido'=> 'martinez sanchez',
            'email'=>'tatiana.martinez@gmail.com',
            'telefono'=> '312455138'
        ]);
        DB::table('empleados')->insert([
            'numero_cedula' => '115',
            'nombre'=> 'francisco ',
            'apellido'=> 'montes sanchez',
            'email'=>'francisco.montes@gmail.com',
            'telefono'=> '320656512'
        ]);
    }
}
