<?php

$encryptedFilename = $argv[1];
$key = $argv[2];

$content = file_get_contents($encryptedFilename);

$cipher = "AES-128-CTR"; 

$options = 0; 

$encryptionIv = intval(file_get_contents(__DIR__ . '/encryption-iv.txt')); 

$decrypted = openssl_decrypt($content, $cipher, $key, $options, $encryptionIv); 

echo $decrypted;exit;