<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>

    <table>
        <form action="{{url("/view")}}" method="get">
            <tr>
                <th></th>
                <th><label for="cognome">Ricerca per cognome:</label>
                    <input type="text" id="cognome" name="cognome" value="{{$cognome}}">
                </th>
                <th></th>
                <th></th>
                <th></th>
                <th><label for="CAP">Ricerca per CAP:</label>
                    <input type="text" id="CAP" name="cap" value="{{$cap}}">
                </th>>
                <th></th>
                <th></th>

            </tr>

            <div class="wrapper">
                <button class="button" id="submit">Search</button>
            </div>
        </form>



        <tr>
            <th>Id Utente</th>
            <th>Cognome</th>
            <th>Nome</th>
            <th>Indirizzo</th>
            <th>Città</th>
            <th>CAP</th>
            <th>Email</th>
            <th>Cellulare</th>

        </tr>
        @foreach($rows as $item)
        <tr>
            <td> {{$item->id}}</td>
            <td> {{$item->cognome}} </td>
            <td> {{$item->nome}} </td>
            <td> {{$item->indirizzo}} </td>
            <td> {{$item->citta}} </td>
            <td> {{$item->CAP}} </td>
            <td> {{$item->email}} </td>
            <td> {{$item->cellulare}} </td>
        </tr>
        @endforeach
    </table>

    </body>
</html>
