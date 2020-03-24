@extends('layouts.layout')
@section('header')
    <h1>Inserisci un gioco</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
@endsection
@section('main')
  <form action="{{(!empty($videogame)) ? route('videogame.update', $videogame->id) : route('videogame.store')}}" method="post">
    @csrf
    @if(!empty($videogame))
      @method('PATCH')
      @else
      @method('POST')
    @endif
    <input type="text" name="titolo" value="{{(!empty($videogame)) ? $videogame->titolo : ''}}" placeholder="Titolo">
    <input type="text" name="casa_produttrice" value="{{(!empty($videogame)) ? $videogame->casa_produttrice : ''}}" placeholder="Casa Produttrice">
    <input type="text" name="codice" value="{{(!empty($videogame)) ? $videogame->codice : ''}}" placeholder="Codice">
    <input type="text" name="prezzo" value="{{(!empty($videogame)) ? $videogame->prezzo : ''}}" placeholder="Prezzo">
    <input type="text" name="genere" value="{{(!empty($videogame)) ? $videogame->genere : ''}}" placeholder="Genere">
    <button type="submit" name="button">Salva</button>
    @method('POST')
  </form>
@endsection
