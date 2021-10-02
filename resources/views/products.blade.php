@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>Produtos</h1>

@if($busca != '')
    <p>Busca feita por: {{ $busca }}</p>
@else
    <p>Nenhuma busca feita.</p>
@endif

@endsection