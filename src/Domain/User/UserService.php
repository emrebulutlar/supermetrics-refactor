<?php

namespace Supermetrics\Domain\User;

use Supermetrics\Domain\User\Interfaces\IUserRepository;

class UserService
{
    public function __construct(
        private readonly IUserRepository $userRepository
    ) {
    }

    public function findUser(EmailAddress $emailAddress): User
    {
        return $this->userRepository->getUserNameByEmail($emailAddress);
    }
}
