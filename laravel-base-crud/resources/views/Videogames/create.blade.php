<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form class="" action="{{route('videogames.store')}}" method="post">
    @csrf

    <input type="text" name="titolo" value="" placeholder="Titolo">
    <input type="text" name="casa_produttrice" value="" placeholder="Casa Produttrice">
    <input type="text" name="codice" value="" placeholder="Codice">
    <input type="text" name="prezzo" value="" placeholder="Prezzo">
    <input type="text" name="genere" value="" placeholder="Genere">
    <button type="submit" name="button">Salva</button>
    @method('POST')
  </form>
</body>
</html>
