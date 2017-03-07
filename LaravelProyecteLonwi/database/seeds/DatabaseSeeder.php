<?php

use Illuminate\Database\Seeder;
use App\Champion;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedCatalog();
	  	$this->command->info('Tabla catálogo inicializada con datos!');
    }

     public function seedCatalog(){
    	DB::table('champions')->delete();
        foreach( $this->arrayChampions as $champions ) {
            $p = new Champion;
            $p->nombre = $champions['nombre'];
            $p->rol = $champions['rol'];
            $p->tier = $champions['tier'];
            $p->poster = $champions['poster'];
            $p->save();
        } 
    }

    private $arrayChampions = array(
    	array(
    		'nombre' => 'Jinx',
            'rol' => 'AD Carry', 
            'tier' => 'Semi God', 
            'poster' => 'http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jinx_2.jpg'
    	)

    );
}
