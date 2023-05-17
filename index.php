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
    public function getComputerDetail() // ???? quando va utilizzata?
    {
        # code...
    }
}



class Portable extends Computer
{
    //parent:: serve?
    public $battery;
    public $webcam;
    public $microphone;
    public $display;

    function __construct($cpu, $motherboard, $hard_disk, $ram, $gpu, $keyboard, $mouse, string $battery, string $webcam, string $microphone, string $display)
    {
        parent::__construct($cpu, $motherboard, $hard_disk, $ram, $gpu, $keyboard, $mouse);
        $this->battery = $battery;
        $this->webcam = $webcam;
        $this->microphone = $microphone;
        $this->display = $display;
    }
}

class Desktop extends Computer
{
    public $case;
    public $external_speakers;
    public $monitor;
    public $external_webcam;

    function __construct($cpu, $motherboard, $hard_disk, $ram, $gpu, $keyboard, $mouse, string $case, string $external_speakers, Monitor $monitor, string $external_webcam)
    {
        parent::__construct($cpu, $motherboard, $hard_disk, $ram, $gpu, $keyboard, $mouse);
        $this->case = $case;
        $this->external_speakers = $external_speakers;
        $this->monitor = $monitor;
        $this->external_webcam = $external_webcam;
    }
}

class Monitor
{
    public $type;
    public $size;
    public $herz;
    public $resolution;

    public function __construct($type, $size, $herz, $resolution)
    {
        $this->type = $type;
        $this->size = $size;
        $this->herz = $herz;
        $this->resolution = $resolution;
    }
}

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

    </main>
    <div class="container"></div>






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