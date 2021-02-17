<?php
/**
 * Description of ProfileRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Profiles\Repositories;


use App\Models\User;
use App\Services\Profiles\DTO\RegisterUserDTO;
use App\Services\Profiles\DTO\UpdateUserDTO;

interface ProfileRepository
{

    public function find(string $id): ?User;
    public function findByEmail(string $email): ?User;
    public function findByPhone(string $phone): ?User;
    public function register(RegisterUserDTO $createUserDTO): User;
    public function updateEmail(string $id, string $email): User;
    public function updatePhone(string $id, string $phone): User;
    public function update(string $id, UpdateUserDTO $updateUserDTO): User;

}
