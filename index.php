<?php

require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/Portable.php';
require_once __DIR__ . '/Models/Desktop.php';


$computer = new Computer('processore_x', 'schedaMadre_x', 'hard_disk_x', 'ram_x', 'schedaVideo_X', 'tastiera_x', 'mouse_x');
var_dump($computer);

$computer1 = new Portable('processore_y', 'schedaMadre_y', 'hard_disk_y', 'ram_y', 'schedaVideo_y', 'tastiera_y', 'mouse_y', 'batteria_y', 'webcam_y', 'microfono_y', 'display_y');

$computer2 = new Desktop('processore_ß', 'schedaMadre_ß', 'hard_disk_ß', 'ram_ß', 'schedaVideo_ß', 'tastiera_ß', 'mouse_ß', 'case_x', 'speacker_ß', new Monitor('led', '120', '120hz', '3024px'), 'webcams_');

$computers = [
    $computer1,
    $computer2
];

var_dump($computers);
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
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
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