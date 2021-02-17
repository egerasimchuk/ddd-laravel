<?php
/**
 * Description of EloquentPaymentRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Repositories\Eloquent;


use App\Models\Invoice as EloquentInvoice;
use App\Services\Payments\DTO\StartInvoiceDTO;
use App\Services\Payments\Entities\Invoice\Invoice;
use App\Services\Payments\Repositories\PaymentRepository;

class EloquentPaymentRepository implements PaymentRepository
{

    public function start(StartInvoiceDTO $startInvoiceDTO): Invoice
    {
        $model = EloquentInvoice::create([
            'user_id' => $startInvoiceDTO->getClient(),
            'items' => $startInvoiceDTO->getItems(),
        ]);
        return new Invoice($model->id);
    }

}
