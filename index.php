<?php

require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/Portable.php';
require_once __DIR__ . '/Models/Desktop.php';
include __DIR__ . '/Database/db.php';

/* $computer = new Computer('processore_x', 'schedaMadre_x', 'hard_disk_x', 'ram_x', 'schedaVideo_X', 'tastiera_x', 'mouse_x');

$computer->setType('');

var_dump($computer->getType());



 */



// var_dump($computers);
?>

<!doctype html>
<html lang="en">

<head>
    <title>COMPUTER OOP EX</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <header>
        <!-- place navbar here -->
    </header>

    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($computers as $key => $computer) : ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $key ?>
                                    <?= $computer->getType() ?>
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <?php foreach ($computer as  $item) : ?>

                                        <li class="list-group-item">
                                            <?= $item ?>
                                        </li>
                                    <?php endforeach; ?>
                                    <li class="list-group-item">
                                        <strong>MONITOR</strong>
                                    </li>
                                    <?php foreach ($computer->getMonitor_as_array() as $component_monitor) : ?>
                                        <li class="list-group-item ps-5">
                                            <?= $component_monitor ?>
                                        </li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </main>


    <footer>
        <!-- place footer here -->
    </footer>






    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>