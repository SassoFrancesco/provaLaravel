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
<div id="lista">
    <table>
        <tr>
            <th></th>
            <th>
                <div><label for="cognome">Ricerca per cognome:</label></div>
                <input type="text" id="cognome" name="cognome3" value="">
            </th>
            <th></th>
            <th></th>
            <th></th>
            <th>
                <div><label for="CAP">Ricerca per CAP:</label></div>
                <input type="text" id="CAP" name="cap2" value="">
            </th>
            <th></th>
            <th></th>

        </tr>

        <div class="wrapper">
            <button class="button" id="submit">Search</button>
        </div>

        <thead>
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
        </thead>
        <tbody id="data">

        </tbody>
    </table>
</div>

<hr/>
<br><br>

<div id="form">
<table>
    <form id="inserimento_dati">
        @csrf
        <tr>
            <th><label for="cognome">Inserisci il cognome:</label>
                <input type="text" id="cognome_form" name="cognome" >
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
                <input type="text" id="cap_form" name="cap">
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
            <button class="button">Insert</button>
        </div>
    </form>
</table>

    <div id="alert">

    </div>
</div>





<script src="http://localhost:8080/js/app.js"></script>
</body>
</html>
