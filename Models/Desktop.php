<?php

require __DIR__ . '/Monitor.php';

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
