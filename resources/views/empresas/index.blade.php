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
        <a href="{{ route('empresas') }}">Resetar</a>
    </form>

    @forelse($empresas as $empresa)
        <div class="empresa">
            <h2>{{ $empresa->nome }}</h2>
            <p> Tags: 
            @foreach($empresa->tags as $tag)
                <a href="">{{ $tag->nome }}</a>
            @endforeach
            </p>
        </div>
    @empty
        <div class="empresa">
            <h2>Empresas não encontradas</h2>
        </div>
    @endforelse
</body>
</html>