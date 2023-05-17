<?php


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
