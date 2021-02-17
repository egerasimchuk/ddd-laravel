<?php
/**
 * Description of PaymentRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Payments\Repositories;


use App\Services\Payments\DTO\StartInvoiceDTO;
use App\Services\Payments\Entities\Invoice\Invoice;

interface PaymentRepository
{

    public function start(StartInvoiceDTO $startInvoiceDTO): Invoice;

}
