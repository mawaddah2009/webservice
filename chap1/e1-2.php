<?php
$url = "http://requestb.in/example";
$data = ["name" => "Lorna", "email" => "lorna@example.com"];
$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => ['Accept: application/json',
            'Content-Type: application/json',
            'content' => json_encode($data)
        ]
    ]
]);
$result = file_get_contents($url, false, $context);