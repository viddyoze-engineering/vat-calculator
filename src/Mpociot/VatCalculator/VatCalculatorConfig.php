<?php


namespace Mpociot\VatCalculator;

use Illuminate\Contracts\Config\Repository as ConfigContract;
use Illuminate\Config\Repository;
use Exception;


class VatCalculatorConfig
{
    /**
     * @param array $array
     * @return ConfigContract|null
     */
    public static function createFromArray(array $array): ?ConfigContract
    {
        try {
            return new Repository($array);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * @param string $json
     * @return ConfigContract|null
     */
    public static function createFromJson(string $json): ?ConfigContract
    {
        try {
            $items = json_decode($json, true);
            return new Repository($items);
        } catch (Exception $e) {
            return null;
        }
    }
}