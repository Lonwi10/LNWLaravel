<?php

use Illuminate\Database\Seeder;

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
}
