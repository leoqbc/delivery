<?php

use Illuminate\Database\Seeder;

use App\Empresa;

class AddEmpresas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            'nome' => 'Extra',
            'endereco' => 'Rua blam, 123',
            'descricao' => 'Extra Supermercados',
            'coordenadas' => '123444, 123333'
        ]);

        Empresa::create([
            'nome' => 'DrogaRaia',
            'endereco' => 'Rua Test, 123',
            'descricao' => 'DrogaRaia Farmacia',
            'coordenadas' => '6432344, 9877443'
        ]);

        Empresa::create([
            'nome' => 'Promofarma',
            'endereco' => 'Rua Test, 123',
            'descricao' => 'Promofarma Farmacia',
            'coordenadas' => '234577, 82364783'
        ]);

        Empresa::create([
            'nome' => 'Pão de açucar',
            'endereco' => 'Rua Alo, 123',
            'descricao' => 'Pão de açucar Mercados',
            'coordenadas' => '6432344, 9877443'
        ]);

        Empresa::create([
            'nome' => 'Panificadora do Zé',
            'endereco' => 'Rua Carlos nobrega, 567',
            'descricao' => 'Panificadora do Zé tudo super fresco',
            'coordenadas' => '09398843, 3344429'
        ]);

        Empresa::create([
            'nome' => 'Burger King',
            'endereco' => 'Rua Anchieta Maria, 3467',
            'descricao' => 'Lanches de primeira',
            'coordenadas' => '09398843, 3344429'
        ]);
    }
}
