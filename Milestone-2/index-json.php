<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>
    <div id="root">
        <!-- Header -->
        <header>
            <img src="img/logo-small.svg" alt="Logo Spotify">
        </header>

        <!-- Main -->
        <main>
            <div class="container">
                <div class="main-wrapper">
                    <div class="row row-cols-md-2 row-cols-lg-4 row-cols-xl-5">

                        <!-- Cards -->
                        <div v-for="(album, index) in albums" :key="index">

                            <div class="col mb-4">
                                <!-- Single card -->
                                <div class="card h-100 text-center">
                                    <!-- Card img -->
                                    <img :src="album.poster" class="card-img-top" :alt="album.title">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <h5 class="card-title">{{album.title}}</h5>
                                        <div class="card-text">{{album.author}}</div>
                                        <div class="card-year">{{album.year}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>