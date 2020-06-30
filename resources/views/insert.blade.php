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
    <form action="{{url("/insert")}}" method="post">
        @csrf
        <tr>
            <th><label for="cognome">Inserisci il cognome:</label>
                <input type="text" id="cognome" name="cognome" >
            </th>
            <th> <label for="cognome">Inserisci il nome:</label>
                <input type="text" id="nome" name="nome" >
            </th>
            <th>
                <label for="cognome">Inserisci la città:</label>
                <input type="text" id="citta" name="citta">
            </th>
            <th></th>
            <th><label for="CAP">Inserisci l'indirizzo:</label>
                <input type="text" id="indirizzo" name="indirizzo">
            </th>>
            <th>
                <label for="cap">Inserisci il CAP:</label>
                <input type="text" id="cap" name="cap">
            </th>
        </tr>
        <tr>
            <th>
                <label for="email">Inserisci la tua email:</label>
                <input type="text" id="email" name="email">
            </th>
            <th>
                <label for="cellulare">Inserisci il tuo cellulare:</label>
                <input type="text" id="cellulare" name="cellulare">
            </th>

        </tr>

        <div class="wrapper">
            <button class="button" >Insert</button>
        </div>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</table>

</body>
</html>
