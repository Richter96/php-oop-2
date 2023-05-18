<?php

class Portable extends Computer
{
    public $battery;
    public $webcam;
    public $microphone;
    public $display;

    function __construct($name, $cpu, $hard_disk, $ram, $gpu, string $battery, string $webcam, string $microphone, string $display)
    {
        parent::__construct($name, $cpu, $hard_disk, $ram, $gpu);

        $this->battery = $battery;
        $this->webcam = $webcam;
        $this->microphone = $microphone;
        $this->display = $display;
    }
    public function setType() // ???? quando va utilizzata?
    {
        $this->type = 'Laptop';
    }
}
