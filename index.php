<?php

include './database.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Dischi</title>
</head>
<body>
    
    <div id="app">

        <header>
            <div class="container-header">
                <figure>
                    <img src="img/spotify-64.png" alt="">
                </figure>
            </div>
        </header>

        <main>
            <div class="container-main">
                <div class="album-container">

                    <?php

                    foreach($albums as $disco) {

                    ?>
                    <div class="card">
                        <figure>
                            <img src="<?php echo $disco['poster']; ?>" alt="">
                        </figure>
                        <h3><?php echo $disco['title'] ?></h3>
                        <p><?php echo $disco['author'] ?></p>
                        <p><?php echo $disco['genre'] ?></p>
                        <p><?php echo $disco['year'] ?></p>
                    </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </main>

    </div>


</body>
</html>