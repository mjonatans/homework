<?php
$message = (string) readline("Enter your message: ");

if (strtolower($message) === 'hello') {
    echo 'world';
}