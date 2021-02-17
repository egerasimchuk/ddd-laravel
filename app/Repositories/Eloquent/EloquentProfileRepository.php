<?php
/**
 * Description of WloquentProfileRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Repositories\Eloquent;


use App\Models\User;
use App\Services\Payments\Repositories\PaymentClientRepository;
use App\Services\Profiles\DTO\RegisterUserDTO;
use App\Services\Profiles\DTO\UpdateUserDTO;
use App\Services\Profiles\Repositories\ProfileRepository;

class EloquentProfileRepository implements ProfileRepository, PaymentClientRepository
{
    public function find(string $id): ?User
    {
        // TODO: Implement find() method.
    }

    public function findByEmail(string $email): ?User
    {
        // TODO: Implement findByEmail() method.
    }

    public function findByPhone(string $phone): ?User
    {
        // TODO: Implement findByPhone() method.
    }

    public function register(RegisterUserDTO $createUserDTO): User
    {
        // TODO: Implement register() method.
    }

    public function updateEmail(string $id, string $email): User
    {
        // TODO: Implement updateEmail() method.
    }

    public function updatePhone(string $id, string $phone): User
    {
        // TODO: Implement updatePhone() method.
    }

    public function update(string $id, UpdateUserDTO $updateUserDTO): User
    {
        // TODO: Implement update() method.
    }


}
