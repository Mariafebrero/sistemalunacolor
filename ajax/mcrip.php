<?php

 // Método para cifrar
$ciphering = "AES-128-CTR"; 
  
// Uso de OpenSSl para el método de encriptar 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
  
// Valor de inicio para la encriptación
$encryption_iv = '1234567891011121'; 
  
// Llave para la encriptación
$encryption_key = "LunaColor"; 
  
// usar openssl_encrypt() para encriptar
$encryption = openssl_encrypt($Contraconfir, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
  
// Mostrar el valor encriptado 
//echo "Encrypted String: " . $encryption . "\n"; 
  
// Valor de inicio para la desencriptación
$decryption_iv = '1234567891011121'; 
  
//  Llave para la desencriptación 
$decryption_key = "LunaColor"; 
  
// usar openssl_encrypt() para desencriptar 
$decryption=openssl_decrypt ($encryption, $ciphering,  
      $decryption_key, $options, $decryption_iv); 
  
// Descrifrado 
//echo "Decrypted String: " . $decryption;  