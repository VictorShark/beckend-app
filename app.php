<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(404);
    exit;
}

if (!isset($_POST['token'])) {
    http_response_code(404);
    exit;
}

// o app NÃO valida o conteúdo do token
// ele só exige que exista
$servers = [
    "servers" => [
        [
            "name" => "GTA SGNTRJ - GMNOVA",
            "ip" => "181.214.48.174",
            "port" => 7777,
            "online" => true,
            "players" => 100,
            "maxplayers" => 500
        ]
    ]
];

// resposta PRECISA ser Base64
$response = json_encode($servers);
echo base64_encode($response);
