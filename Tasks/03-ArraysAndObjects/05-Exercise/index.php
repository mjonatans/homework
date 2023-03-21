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


$result = '';

foreach ($items[0] as $item) {
    foreach ($item as $value) {
        $result = join(" ", $item);
    }
    echo $result . "\n";
}

