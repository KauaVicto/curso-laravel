@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie um Evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="from-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>
        <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0" selected>Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Sobre o que é o evento?"></textarea>
        </div>
        <div class="form-group checkbox">
            <label for="description">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras" id="cadeiras"><label for="cadeiras">Cadeiras</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco" id="palco"><label for="palco">Palcos</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja grátis" id="cerveja_gratis"><label for="cerveja_gratis">Cerveja Grátis</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food" id="open_food"><label for="open_food">Open Food</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes" id="brindes"><label for="brindes">Brindes</label>
            </div>
        </div>
        <input type="submit" value="Criar Evento" class="btn btn-primary">
    </form>
</div>

@endsection