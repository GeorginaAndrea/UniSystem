<?php

namespace App\Helpers;

class NetworkHelper
{
    public static function getIpLocal()
    {
        return request()->ip();
    }

    public static function getIpGateway()
    {
        return gethostbyname(gethostname());
    }

    public static function getMacAddress()
    {
         $output = shell_exec('getmac');

        // Explota por líneas
        $lines = explode("\n", $output);

        foreach ($lines as $line) {
            // Busca una dirección MAC con formato XX-XX-XX-XX-XX-XX
            if (preg_match('/([0-9A-F]{2}[-:]){5}[0-9A-F]{2}/i', $line, $matches)) {
                return $matches[0];
            }
        }

        return null;
    }
}
