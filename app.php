<?php
// NÃO use header()
// NÃO use echo com texto extra
// NÃO use json_encode com flags estranhas

// ignora tudo que o app manda
// o app NÃO valida o request

$response =
'{"servers":[
  {
    "name":"Servidor Oficial",
    "ip":"181.214.48.174",
    "port":7777,
    "online":true,
    "players":123,
    "maxplayers":500
  }
]}';

// resposta FINAL precisa ser Base64 puro
echo base64_encode($response);
exit;
