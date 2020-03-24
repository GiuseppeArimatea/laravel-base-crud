@extends('layouts.layout')
@section('header')
    <h1>Tutti i giochi</h1>
@endsection
@section('main')
<div class="videogames">
  @foreach ($videogames as $videogame)
    <div class="Videogame">
      <ul>
        <li>Id: {{$videogame->id}}</li>
        <li>Titolo: {{$videogame->titolo}}</li>
        <li>Casa Produttrice: {{$videogame->casa_produttrice}}</li>
        <li>Codice: {{$videogame->codice}}</li>
        <li>Prezzo: {{$videogame->prezzo}}</li>
        <li>Genere: {{$videogame->genere}}</li>
      </ul>
    </div>
  @endforeach
</div>
@endsection
