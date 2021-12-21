<?php require_once __DIR__ . '/data/database.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>v-php</title>
</head>

<body>
    <header>
        <div class="container">
            <div>
                <div class="logo">
                    <img src="./img/logo.png" alt="image description">
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <ul>
                <?php foreach ($database as $key => $value) : ?>
                    <li class="card">
                        <div class="card-image">
                            <div>
                                <img src="<?php echo $value['poster'] ?>" alt="image description">
                            </div>
                        </div>
                        <h3 class="card-title"> <?php echo $value['title'] ?> </h3>
                        <p class="card-author"> <?php echo $value['author'] ?> </p>
                        <h4 class="card-year"> <?php echo $value['year'] ?> </h4>
                        <div class="card-genre"> <?php echo $value['genre'] ?> </div>
                    </li>
                <?php endforeach ?>

            </ul>
        </div>
    </main>
</body>

</html>