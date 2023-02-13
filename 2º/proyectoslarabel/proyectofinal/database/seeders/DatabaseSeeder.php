<?php

namespace Database\Seeders;


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\productos;
use \Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        self::seedproductos();
		$this->command->info('Tabla catálogo inicializada con datos!');
    }
	private function seedproductos(){
		DB::table('productos')->delete();
    	
			$p = new productos();
			$p->categoria = "ordenador";
			$p->nombre = "omen 17";
			$p->save();
    }
}
