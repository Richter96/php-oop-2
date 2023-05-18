<?php


class Desktop extends Computer
{
    use Monitor;
    public $case;

    function __construct(string $name, string $cpu, string $hard_disk, string $ram, string $gpu, string $_case)
    {
        parent::__construct($name, $cpu, $hard_disk, $ram, $gpu);
        $this->case = $_case;
    }

    public function setType() // ???? quando va utilizzata?
    {
        $this->type = 'Desktop';
    }
}
