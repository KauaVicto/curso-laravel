<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <h1>alguma coisa</h1>
        <img src="/img/banner.jpg" alt="Banner">
        @if(10 < 5)
            <p>Verdadeiro</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == 'Layla')
            <p>O nome é {{$nome}} e possui {{$idade}} anos, trabalha como {{$profissao}}.</p>
        @else
            <p>O nome não é {{$nome}}</p>
        @endif

        @for($i = 0;$i < count($arr); $i++)
            <p>{{$i}} - {{$arr[$i] }}</p>
            @if($i == 2)
                <p>i é 2</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p>{{$loop->index}} - {{ $nome }}</p>
        @endforeach

        @php
            $valor = 12;
            echo $valor;
        @endphp

        <!-- Comentário html -->
        {{-- Comentário do blade --}}

        <script src="/js/script.js"></script>
    </body>
</html>
