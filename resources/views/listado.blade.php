@extends('plantilla')
@section('titulo', 'Peliculas')
@section('contenido')
<h1>Listado Peliculas</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Year</th>
      <th scope="col">Director</th>
      <th scope="col">Poster</th>
      <th scope="col">Rented</th>
      <th scope="col">Synopsis</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
    </tr>
  </thead>
  <tbody>
    @foreach($peliculas as $pelicula){
        <tr>
        <th scope="row">{{$pelicula->id}}</th>
        <th scope="row">{{$pelicula->title}}</th>
        <th scope="row">{{$pelicula->year}}</th>
        <th scope="row">{{$pelicula->director}}</th>
        <th scope="row">{{$pelicula->rented}}</th>
        <th scope="row">{{$pelicula->synopsis}}</th>
        <th scope="row">{{$pelicula->created_at}}</th>
        <th scope="row">{{$pelicula->updated_at}}</th>
        <form action="{{ route('libros.show', $pelicula->id) }}" method="POST">
        @csrf
        <a type="submit" class="btn btn-dark">Detalles</a>
        </form>
        <form action="{{ route('libros.show', $pelicula->id) }}" method="PUT">
        @csrf
        @method('UPDATE')
        <a type="submit" class="btn btn-dark">Modificar</a>
        </form>
        <form action="{{ route('libros.show', $pelicula->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <a type="submit" class="btn btn-dark">Eliminar</a>
        </form>
        </tr>
    }
@endforeach
</tbody>
</table>
@endsection