@extends('layouts.layout')
@section('header')
    <h1>Tutti i giochi</h1>
    @if(!empty($id))
      <div>Hai cancellato il record {{$id}}</div>
    @endif
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
        <li>
          <form action="{{route('videogames.destroy', $videogame->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
          </form>
        </li>
      </ul>
    </div>
  @endforeach
</div>
@endsection
