<?php
$computers = [
    new Portable('iMac', 'm1', 'SSD 1T', '16gb', 'AMD', 'includs', '12mp', 'includs', 'retina'),
    new Desktop('lenovo', 'intel i7', 'HDD 500gb', '8bg', 'NVIDIA gt980', 'GreenLed case', 'lcd')
];


$computers[0]->setType();
$computers[1]->setType();
