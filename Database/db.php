<?php
$computers = [
    new Portable('processore_y', 'schedaMadre_y', 'hard_disk_y', 'ram_y', 'schedaVideo_y', 'tastiera_y', 'mouse_y', 'batteria_y', 'webcam_y', 'microfono_y', 'display_y'),
    new Desktop('processore_ß', 'schedaMadre_ß', 'hard_disk_ß', 'ram_ß', 'schedaVideo_ß', 'tastiera_ß', 'mouse_ß', 'case_x', 'speacker_ß', new Monitor('led', '120', '120hz', '3024px'), 'webcams_')
];


$computers[0]->setType();
$computers[1]->setType();
