<?php


trait display_set
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

    public function setDisplaySet()
    {
    }
}
