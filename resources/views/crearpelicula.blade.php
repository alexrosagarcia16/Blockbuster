@extends('plantilla')
@section('titulo', 'Dar Alta Formulario')
@section('contenido')
<h1>Formulario Pelicula</h1>
<form action="{{ route('peliculas.store') }}" method="POST">
<div class="row mb-3">
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" name="titulo" id="titulo">
    </div>
    <div class="form-group">
        <label for="editorial">Año:</label>
        <input type="text" class="form-control" name="editorial"id="editorial">
    </div>
    <div class="form-group">
        <label for="precio">Director:</label>
        <input type="text" class="form-control" name="precio"id="precio">
    </div>
    <div class="form-group">
        <label for="precio">Poster:</label>
        <input type="text" class="form-control" name="precio"id="precio">
    </div>
    <div class="form-group">
        <label for="precio">Rented:</label>
        <input type="text" class="form-control" name="precio"id="precio">
    </div>
    <div class="form-group">
        <label for="precio">Synopsis:</label>
        <input type="text" class="form-control" name="precio"id="precio">
    </div>
</div>
<input type="submit" name="enviar" value="Enviar" class="btn btn-dark
btn-block">
</div>
</form>
@endsection