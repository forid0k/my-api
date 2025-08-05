<?php
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["token"])) {
    http_response_code(400);
    echo json_encode(["error" => "Token missing"]);
    exit;
}

$tokens = [
    "123456789012",
    "111222333444",
    "555666777888"
];

$token = $data["token"];

if (!in_array($token, $tokens)) {
    http_response_code(403);
    echo json_encode(["error" => "Invalid token"]);
    exit;
}

// শুধু সিগন্যাল জেনারেট
$signal = rand(0, 1) ? "BUY" : "SELL";

echo json_encode(["signal" => $signal]);
