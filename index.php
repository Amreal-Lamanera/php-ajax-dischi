<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DISCHI</title>
    <link rel="stylesheet" href="app.css">
    <!-- VUE -->
    <script src='https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js'></script>
    <!-- AXIOS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js'></script>
    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>

    <div id="app">



        <header class="d-flex justify-content-between">

            <img src="./img/lama.png" alt="">

            <div class="filters">

            </div>

        </header>

        <?php
        include __DIR__ . '/api/albums.php';
        ?>

        <main>
            <div class="container-lg p-5">
                <div class="grid">

                    <?php
                    foreach ($albums as $album) {
                    ?>

                        <div class="grid-col">
                            <div class="my_card">
                                <div class="card-img-top position-relative">
                                    <img src="<?= $album['poster'] ?>" alt="">
                                    <div class="btn">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <h5 class="card-title">
                                        <?= $album['title'] ?>
                                    </h5>

                                    <p class="card-text">
                                        <?= $album['author'] ?>
                                        <br>
                                        <?= $album['year'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </main>

    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>

    <!-- FONT AWESOME -->
    <script src='https://kit.fontawesome.com/b0485a66c8.js' crossorigin='anonymous'></script>

    <script src='app.js'></script>

</body>

</html>