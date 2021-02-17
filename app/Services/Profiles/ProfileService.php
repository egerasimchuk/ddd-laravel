<?php
/**
 * Description of ProfileService.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Profiles;


use App\Services\Profiles\DTO\RegisterUserDTO;
use App\Services\Profiles\Handlers\RegisterUserHandler;

class ProfileService
{

    private RegisterUserHandler $registerUserHandler;

    public function __construct(
        RegisterUserHandler $registerUserHandler
    )
    {
        $this->registerUserHandler = $registerUserHandler;
    }

    public function register(RegisterUserDTO $registerUserDTO)
    {
        $this->registerUserHandler->handle($registerUserDTO);
    }

    public function block(int $user)
    {
        $this->registerUserHandler->handle($user);
    }

}
