<?php

class Computer
{
    public $cpu;
    public $motherboard;
    public $hard_disk;
    public $ram;
    public $gpu;
    public $keyboard;
    public $mouse;

    public function __construct($cpu, $motherboard, $hard_disk, $ram, $gpu, $keyboard, $mouse)
    {
        $this->cpu = $cpu;
        $this->motherboard = $motherboard;
        $this->hard_disk = $hard_disk;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->keyboard = $keyboard;
        $this->mouse = $mouse;
    }
}

class PortableComputer extends Computer
{
    public $battery;
    public $webcam;
    public $microphone;
    public $display;
}

class DesktopComputer
{
    public $case;
    public $external_speakers;
    public $monitor;
    public $external_webcam;
}

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