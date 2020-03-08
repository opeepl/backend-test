<?php
namespace Opeepl\BackendTest\Service;

/**
 * Main entrypoint for this library.
 */
class ExchangeRateService {

    /**
     * Return all supported currencies
     *
     * @return array<string>
     */
    public function getSupportedCurrencies(): array {
    }

    /**
     * Given the $amount in $fromCurrency, it returns the corresponding amount in $toCurrency.
     *
     * @param int $amount
     * @param string $fromCurrency
     * @param string $toCurrency
     * @return int
     */
    public function getExchangeAmount(int $amount, string $fromCurrency, string $toCurrency): int {
    }
}
