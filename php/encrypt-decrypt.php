<?php

    function convert_string($action,$string){
        
        // Text to be converted can be plaintext or encrypted text
        $text_to_be_convert = $string;
        // action -> encryption or decryption by character 
        //'e' standfor encrypt and 'd' standfor decrypt          
        $action_to_be_done = $action;
        // Secret key for both encrypt and decrypt
        $secret_key = "password";
        // Method involved in encrypt or decrypt
        $method = "AES-256-CBC";
        $iv = substr(hash('sha256',$secret_key),0,16);

        // Encryption
        if($action_to_be_done == 'e'){
            $encrypt_text = openssl_encrypt($text_to_be_convert,$method,$secret_key,OPENSSL_RAW_DATA,$iv);
            $output = $encrypt_text;
        }

        // Decryption
        if($action_to_be_done == 'd'){
            $decrypt_text = openssl_decrypt($text_to_be_convert,$method,$secret_key,OPENSSL_RAW_DATA,$iv);
            $output = $decrypt_text;
        }
        return $output;
    }

?> 