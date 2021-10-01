@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

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

@endsection