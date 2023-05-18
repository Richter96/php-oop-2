<?php

require __DIR__ . '/../Trails/Monitor.php';
class Portable extends Computer
{
    use Monitor;

    public $battery;
    public $webcam;
    public $microphone;

    function __construct(string $name, string $cpu, string $hard_disk, string $ram, string $gpu, string $battery, string $webcam, string $microphone,)
    {
        parent::__construct($name, $cpu, $hard_disk, $ram, $gpu);

        $this->battery = $battery;
        $this->webcam = $webcam;
        $this->microphone = $microphone;
    }
    public function setType() // ???? quando va utilizzata?
    {
        $this->type = 'Laptop';
    }
}
