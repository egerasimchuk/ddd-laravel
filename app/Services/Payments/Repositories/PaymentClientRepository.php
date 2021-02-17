<?php
/**
 * Description of PaymentClientRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Payments\Repositories;


use App\Models\User;

interface PaymentClientRepository
{

    public function find(string $id): ?User;

}
