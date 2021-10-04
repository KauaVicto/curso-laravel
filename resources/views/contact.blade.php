@extends('layouts.main')

@section('title', 'Contatos')

@section('content')

<h1>Contatos</h1>
<a href="/">Home</a>

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Buscar">
    </form>
</div>

@endsection