<?php


namespace Mpociot\VatCalculator;

use Illuminate\Contracts\Config\Repository as ConfigContract;
use Illuminate\Config\Repository;
use Exception;


class VatCalculatorConfig
{
    /**
     * @var ConfigContract|null
     */
    private $config;

    /**
     * VatCalculatorConfig constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $this->create($config);
    }

    /**
     * @return ConfigContract|null
     */
    public function getConfig(): ?ConfigContract
    {
        return $this->config;
    }

    /**
     * @param array $array
     * @return ConfigContract|null
     */
    public function create(array $array): ?ConfigContract
    {
        try {
            return new Repository($array);
        } catch (Exception $e) {
            return null;
        }
    }
}