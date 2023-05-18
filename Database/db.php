<?php
$computers = [
    new Portable('iMac', 'm1', 'SSD 1T', '16gb', 'AMD', 'includs', '12mp', 'includs', 'retina'),
    new Desktop('lenovo', 'intel i7', 'HDD 500gb', '8bg', 'NVIDIA gt980', 'GreenLed case', 'lcd')
];


$computers[0]->setType();
$computers[0]->setMonitor('retina', '60"', '120hrz', '3024px');
$computers[1]->setType();
$computers[1]->setMonitor('retina', '60"', '120hrz', '3024px');
/* 
check funzionamento monitor
var_dump($computers);

var_dump($computers[0]->getMonitor_as_array());
 */