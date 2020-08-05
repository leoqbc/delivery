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
        // Primeiro essa classe
        $this->call(AddEmpresas::class);
        $this->call(AddTags::class);
        $this->call(AddEmpresasTags::class);
    }
}
