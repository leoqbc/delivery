<?php

use Illuminate\Database\Seeder;

use App\Tag;

class AddTags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['nome' => 'mercado']);
        Tag::create(['nome' => 'supermercado']);
        Tag::create(['nome' => 'alimentos']);
        Tag::create(['nome' => 'banheiro']);
        Tag::create(['nome' => 'padaria']);
        Tag::create(['nome' => 'cosméticos']);
        Tag::create(['nome' => 'medicamentos']);
        Tag::create(['nome' => 'pratos']);
        Tag::create(['nome' => 'lanches']);
        Tag::create(['nome' => 'fastfood']);
        Tag::create(['nome' => 'farmacia']);
    }
}
