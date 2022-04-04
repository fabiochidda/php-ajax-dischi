<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
</head>
<body>
    
    <div id="app">

        <header>
            <div class="container-header">
                <figure>
                    <img src="./img/spotify-64.png" alt="">
                </figure>
            </div>
        </header>

        <main>
            <div class="container-main">
                <div class="album-container">
                    <div class="card">
                        <figure>
                            <img :src="albumItems.poster" alt="">
                        </figure>
                        <h3></h3>
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </main>

    </div>


</body>
</html>