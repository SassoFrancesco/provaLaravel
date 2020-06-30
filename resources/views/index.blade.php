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

<div id="form">

</div>


<script src="http://localhost:8080/js/app.js"></script>
</body>
</html>
