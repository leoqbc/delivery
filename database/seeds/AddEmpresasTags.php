<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AddEmpresasTags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        // Insert via SQL gerado pelo LARAVEL
        DB::table('empresa_tag')->insert([
            [
                'empresa_id' => 1,
                'tag_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 1,
                'tag_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 1,
                'tag_id' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 1,
                'tag_id' => 4,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 1,
                'tag_id' => 5,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 2,
                'tag_id' => 6,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 2,
                'tag_id' => 7,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 2,
                'tag_id' => 4,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 2,
                'tag_id' => 11,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 3,
                'tag_id' => 6,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 3,
                'tag_id' => 7,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 3,
                'tag_id' => 4,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 3,
                'tag_id' => 11,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 4,
                'tag_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 4,
                'tag_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 4,
                'tag_id' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 4,
                'tag_id' => 4,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 5,
                'tag_id' => 5,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 5,
                'tag_id' => 8,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 5,
                'tag_id' => 9,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 6,
                'tag_id' => 9,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'empresa_id' => 6,
                'tag_id' => 10,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
