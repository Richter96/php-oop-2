<?php


trait Monitor
{
    private $type_display;
    private $size;
    private $herz;
    private $resolution;

    /* public function __construct($type, $size, $herz, $resolution)
    {
        $this->type = $type;
        $this->size = $size;
        $this->herz = $herz;
        $this->resolution = $resolution;
    } */

    public function getMonitor_as_array()
    {
        $array = [
            $this->type_display,
            $this->size,
            $this->herz,
            $this->resolution,
        ];
        return $array;
    }

    public function setMonitor(string $_type_display, string $_size, string $_herz, string $_resolution)
    {
        $this->type_display = $_type_display;
        $this->size = $_size;
        $this->herz = $_herz;
        $this->resolution = $_resolution;
    }

    public function getTypeDisplay()
    {
        return $this->type_display;
    }
}
