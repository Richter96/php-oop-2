<?php
require __DIR__ . '/../Trails/Monitor.php';

class Computer
{
    protected $type;
    protected $name;
    public $cpu;
    public $hard_disk;
    public $ram;
    public $gpu;


    public function __construct(string $name, string $cpu, string $hard_disk, string $ram, string $gpu)
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
