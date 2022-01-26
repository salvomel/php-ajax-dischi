<?php
require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
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
                    <?php foreach($database as $card) { ?>

                        <div class="col mb-4">
                            <!-- Single card -->
                            <div class="card h-100 text-center">
                                <!-- Card img -->
                                <img src="<?php echo $card['poster']; ?>" class="card-img-top" alt="<?php echo $card['title']; ?>">
                                <!-- Card body -->
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $card['title']; ?></h5>
                                    <div class="card-text"><?php echo $card['author']; ?></div>
                                    <div class="card-year"><?php echo $card['year']; ?></div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>