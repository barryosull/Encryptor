<?php 

$filename = $argv[1];
$key = $argv[2];

$content = file_get_contents($filename);

$cipher = "AES-128-CTR"; 

$options = 0; 

$encryptionIv = intval(file_get_contents(__DIR__ . '/encryption-iv.txt')); 

$encrypted = openssl_encrypt($content, $cipher, $key, $options, $encryptionIv); 

$encryptedFilename = $filename . ".aes";

file_put_contents($encryptedFilename, $encrypted);

echo "'$filename' encrypted => '$encryptedFilename'\n";
 

