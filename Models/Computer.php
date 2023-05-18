<?php

class Computer
{
    protected $type;
    protected $name;
    public $cpu;
    public $hard_disk;
    public $ram;
    public $gpu;


    public function __construct($name, $cpu, $hard_disk, $ram, $gpu)
    {
        $this->name = $name;
        $this->cpu = $cpu;
        $this->hard_disk = $hard_disk;
        $this->ram = $ram;
        $this->gpu = $gpu;
    }


    public function setType()
    {
        $this->type = 'computer';
    }


    public function getType()
    {
        return $this->type;
    }
};
