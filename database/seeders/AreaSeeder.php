<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creacion con DB querybuildet
        DB::table('areas')->insert([
            'nombre_area' => 'Rectoria',
            'titular' => 'Ruth Padilla',
            'informacion' => 'Protocolo Rectoria',
            'telefono' => '1234567',
        ]);

        //Creacion con modelo
        Area::create([
            'nombre_area' => 'Cord. Computación',
            'titular' => 'Martha',
            'informacion' => 'Ayuda en Procesos',
            'telefono' => '98765',
        ]);


        Area::factory(20)->create();
    }
}
