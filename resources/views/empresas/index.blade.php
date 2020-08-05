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
            @foreach($tags as $tag)
            <li>
                <input 
                type="checkbox" 
                name="filtros[{{ $tag->nome }}]" 
                value="{{ $tag->id }}"  
                id="{{ $tag->nome }}" 
                @isset(request()->get('filtros')[$tag->nome]) checked @endisset
                >
                <label for="{{ $tag->nome }}">{{ $tag->nome }}</label>
            </li>
            @endforeach
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