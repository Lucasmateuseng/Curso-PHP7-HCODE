<?php
//tranforma php em json

$json = '[{"nome":"Lucas","idade":22},{"nome":"Jessica","idade":28}]';

$data =  json_decode($json, true);

var_dump($data);

?>