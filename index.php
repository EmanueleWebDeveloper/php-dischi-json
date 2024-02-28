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
    <link rel="stylesheet" href="style.css">

    <title>php-dischi-json</title>
</head>
<body>
    <div id="app">
        <div class="d-flex p-2 barra">
            <img id="logo" src="./assets/img/2111624.png" alt="">
            <h1 class="text-light">{{message}}</h1>
        </div>
        <main class="d-flex flex-wrap justify-content-center gap-4 p-3">
            <div 
            v-for="(element, index) in listaDischi"      :key="index" 
            class="card text-center p-1" 
            style="width: 10rem;">
            <img :src="element.img_URL" class="card-img-top p-4" alt="...">

                <div class="card-body">
                    <h3>{{ element.album_name }}</h3>
                    <p>{{ element.artist }}</p>
                    <h4>{{ element.year }}</h4>
                </div>
            </div>  
        </main>
    </div>



    <!-- JavaScript imports Vue/Axios/Bootstrap/JS -->
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/main.js" type="text/Javascript"></script>

</body>
</html>