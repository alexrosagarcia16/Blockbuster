@extends('plantilla')
@section('titulo', 'Detalles Pelicula')
@section('contenido')
<h1>Detalles de la Pelicula {{$pelicula->title}}</h1>

<tr>
        <th scope="row">{{$pelicula->id}}</th>
        <th scope="row">{{$pelicula->title}}</th>
        <th scope="row">{{$pelicula->year}}</th>
        <th scope="row">{{$pelicula->director}}</th>
        <th scope="row">{{$pelicula->rented}}</th>
        <th scope="row">{{$pelicula->synopsis}}</th>
        <th scope="row">{{$pelicula->created_at}}</th>
        <th scope="row">{{$pelicula->updated_at}}</th>
</tr>
@endsection