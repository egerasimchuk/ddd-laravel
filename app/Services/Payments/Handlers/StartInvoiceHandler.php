<?php
/**
 * Description of StartInvoiceHandler.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Payments\Handlers;


use App\Services\Payments\DTO\StartInvoiceDTO;
use App\Services\Payments\Events\StartInvoiceEvent;
use App\Services\Payments\Repositories\PaymentClientRepository;
use App\Services\Payments\Repositories\PaymentRepository;

class StartInvoiceHandler
{

    private PaymentClientRepository $paymentClientRepository;
    private PaymentRepository $paymentRepository;

    public function __construct(
        PaymentClientRepository $paymentClientRepository,
        PaymentRepository $paymentRepository
    )
    {
        $this->paymentRepository = $paymentRepository;
        $this->paymentClientRepository = $paymentClientRepository;
    }

    public function handle(StartInvoiceDTO $startInvoiceDTO)
    {
        $client = $this->paymentClientRepository->find($startInvoiceDTO->getClient());
        if (! $client) {
            throw new ClientNotFoundException();
        }

        $invoice = $this->paymentRepository->start($startInvoiceDTO);
        StartInvoiceEvent::dispatch($invoice);
    }

}
