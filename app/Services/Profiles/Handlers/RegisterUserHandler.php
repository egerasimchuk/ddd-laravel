<?php
/**
 * Description of RegisterUserHandler.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Profiles\Handlers;


use App\Services\Profiles\DTO\RegisterUserDTO;
use App\Services\Profiles\Events\UserRegisteredEvent;
use App\Services\Profiles\Repositories\ProfileRepository;

class RegisterUserHandler
{

    /**
     * @var ProfileRepository
     */
    private ProfileRepository $profileRepository;

    public function __construct(
        ProfileRepository $profileRepository
    )
    {
        $this->profileRepository = $profileRepository;
    }

    public function handle(RegisterUserDTO $registerUserDTO): void
    {
        // assert user can register

        $user = $this->profileRepository->register($registerUserDTO);
        UserRegisteredEvent::dispatch($user->id);
    }

}
