<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= baseUrl('/assets/estilo.css') ?>">

    <title><?= $_ENV['APP_TITLE'] ?></title>
</head>

<body>

    <div class="container">
        <div class="text-center">
            <div class="row mt-5">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-1">
                                <strong>
                                    <?= $this->section('error_code') ?>
                                </strong>
                            </h1>
                        </div>
                        <div class="col-12">
                            <?= $this->section('message') ?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <img src="<?= baseUrl('/assets/images/perdido.png') ?>" alt="">
                </div>
            </div>
        </div>
    </div>

</body>

</html>