<?php
$response =
'{"servers":[
  {
    "name":"GTA SGNTRJ - GMNOVA",
    "ip":"181.214.48.174",
    "port":7777,
    "online":true,
    "players":100,
    "maxplayers":500
  }
]}';

echo base64_encode($response);
exit;
