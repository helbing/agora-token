<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/./TestTool.php';

use function AgoraToken\getToken;

$appID = "970CA35de60c44645bbae8a215061b33";
$appCertificate = "5CFd2fd1755d40ecb72977518be15d3b";
$account = "7d72365eb983485397e3e3f9d460bdda";
$expiredSecond = 2000;
$result = 'CA35de60c44645bbae8a215061b33:1553499399:91cf7acc5e81fbedf971cf019d0a5b17%';

$token = getToken($appID, $appCertificate, $account, $expiredSecond);

assertEqual(true, is_string($token));
