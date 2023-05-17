<?php

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
