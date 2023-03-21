<?php
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

$values = ($items[0])[1];
$result = '';

foreach ($values as $value) {
    $result = join(" ",$values);
}

echo $result;

