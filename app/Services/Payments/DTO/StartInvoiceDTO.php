<?php
/**
 * Description of StartInvoiceDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Payments\DTO;


class StartInvoiceDTO
{

    public function __construct(
        private int $client,
        private array $items
    )
    {

    }

    /**
     * @return int
     */
    public function getClient(): int
    {
        return $this->client;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }



}
