<?php

class Desktop extends Computer
{
    public $case;
    public $monitor;

    function __construct($name, $cpu, $hard_disk, $ram, $gpu, string $_case, $_monitor)
    {
        parent::__construct($name, $cpu, $hard_disk, $ram, $gpu);
        $this->case = $_case;
        $this->monitor = $_monitor;
    }

    public function setType() // ???? quando va utilizzata?
    {
        $this->type = 'Desktop';
    }

    public function set_monitor(array $monitor)
    {
        if (count($monitor) < 3) {
            throw new Exception("Monitor deve avere almeno tre caratteristiche");
        }
    }
}
