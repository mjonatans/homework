<?php
$plateNumber = (string) readline('enter your car number: ');
switch ($plateNumber){
    case 'AB123' :
        echo 'not your car';
        break;
    case 'AB1234' :
        echo 'this is your car';
        break;
    default :
        echo 'car not found';
        break;
}