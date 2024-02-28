<?php
// Descrizione
// Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>

    <title>php-dischi-json</title>
</head>
<body>
    <div id="app">
        <h1>{{message}}</h1>
    </div>
    <main>
        <ul>
        <li v-for="(element, index) in listaDischi" :key="index">
      {{ element }}
    </li>
        </ul>
    </main>




    <!-- JavaScript imports Vue/Axios/Bootstrap/JS -->
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/main.js" type="text/Javascript"></script>

</body>
</html>