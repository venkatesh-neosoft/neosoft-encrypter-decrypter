<?php
namespace Providers\Classes;

use Providers\Core\Singleton;

class Encrypter extends Singleton
{
    private static $cipher;
    private static $encryption_key;
    private static $iv;

    protected function __construct()
    {
       self::$cipher = "aes-256-cfb";
       self::$encryption_key = openssl_random_pseudo_bytes(32);
       self::$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(self::$cipher));
    }

    public static function encrypt(string $data): string
    {

        return empty($data) ? '' : openssl_encrypt($data, self::$cipher, self::$encryption_key, 0, self::$iv) . "$2" . base64_encode(self::$iv) . ":32" . base64_encode(self::$encryption_key);
    }

    public static function decrypt(string $data): string
    {
        $output = "";

        if(!empty($data))
        {
            $sub_strings = explode("$2", $data);
            $iv_suffix = explode(":32", $sub_strings[1]);
            $message = $sub_strings[0];
            $iv = $iv_suffix[0];
            $key = $iv_suffix[1];

            $output = openssl_decrypt($message, self::$cipher, base64_decode($key), 0, base64_decode($iv));

        }

        return $output;
    }

}