<?php
header("Content-Type: application/json");
$tokens = [
    "123456789012",
    "111222333444",
    "555666777888"
];

if (isset($_GET['check'])) {
    $checkToken = $_GET['check'];
    if (in_array($checkToken, $tokens)) {
        echo json_encode(["valid" => true]);
        exit;
    }
    echo json_encode(["valid" => false]);
    exit;
}

echo json_encode(["error" => "Please provide token with ?check=TOKEN"]);
