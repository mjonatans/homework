<?php

$gravity = -9.81;
$seconds = 10;
$initialVelocity = 0;

$position = 0.5 * $gravity * $seconds * $seconds + $initialVelocity * $seconds;

echo "The position of the object after falling for $seconds seconds is $position meters";