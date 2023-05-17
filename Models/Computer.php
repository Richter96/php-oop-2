<?php

class Computer
{
    protected $type;
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


    public function setType() // ???? quando va utilizzata?
    {
        $this->type = 'computer';
    }


    public function getType()
    {
        return $this->type;
    }
};
