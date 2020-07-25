<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos Filtro</title>
</head>
<body>
    <h1>Delivery FastBags</h1>

    <p>Filtros</p>
    
    <form action="{{ route('empresas') }}" method="GET">
        <ul>
            <li>
                <input type="checkbox" name="filtros[mercado]" value="1"  id="mercado" @isset(request()->get('filtros')['mercado']) checked @endisset>
                <label for="mercado">mercado</label>
            </li>
            <li>
                <input type="checkbox" name="filtros[alimentos]" value="1" id="alimentos" @isset(request()->get('filtros')['alimentos']) checked @endisset>
                <label for="alimentos">alimentos</label>
            </li>
            <li>
                <input type="checkbox" name="filtros[cosmeticos]" value="1" id="cosmeticos" @isset(request()->get('filtros')['cosmeticos']) checked @endisset>
                <label for="cosmeticos">cosméticos</label>
            </li>
        </ul>
        <button>Filtrar</button>
        
    </form>

    <div class="empresa">
        <h2>Extra</h2>
        <p>Tags: mercado, supermercado, alimentos, banheiro, pão</p>
    </div>

    <div class="empresa">
        <h2>DrogaRaia</h2>
        <p>Tags: cosméticos, medicamentos, banheiro</p>
    </div>

    <div class="empresa">
        <h2>Panificadora do Zé</h2>
        <p>Tags: lanches, pratos, pão</p>
    </div>
</body>
</html>