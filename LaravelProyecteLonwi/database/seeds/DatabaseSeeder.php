<?php

use Illuminate\Database\Seeder;
use App\Champion;
use App\Tier;

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
        self::seedTier();
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

    public function seedTier(){
        DB::table('tiers')->delete();
        foreach( $this->arrayTier as $tiers ) {
            $p = new Tier;
            $p->nombre = $tiers['nombre'];
            $p->save();
        } 
    }



    private $arrayChampions = array(
    	array(
    		'nombre' => 'Jinx',
            'rol' => 'AD Carry', 
            'tier' => 'Semi God', 
            'poster' => 'http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jinx_2.jpg'
    	),
        array(
            'nombre' => 'Lucian',
            'rol' => 'AD Carry', 
            'tier' => 'God Tier', 
            'poster' => 'http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lucian_0.jpg'
        ),
        array(
            'nombre' => 'Ahri',
            'rol' => 'Mid Laner', 
            'tier' => 'God Tier', 
            'poster' => 'http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ahri_4.jpg'
        ),
        array(
            'nombre' => 'Orianna',
            'rol' => 'Mid Laner', 
            'tier' => 'Semi God', 
            'poster' => 'http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Orianna_3.jpg'
        ),
        array(
            'nombre' => 'Riven',
            'rol' => 'Top Laner', 
            'tier' => 'God Tier', 
            'poster' => 'http://ddragon.leagueoflegends.com/cdn/img/champion/splash/Riven_3.jpg'
        ),

    );

    private $arrayTier = array(
        array(
            'nombre' => 'God Tier'
        ),
        array(
            'nombre' => 'Semi God'
        ),
        array(
            'nombre' => 'Low Tier'
        )

    );
}
