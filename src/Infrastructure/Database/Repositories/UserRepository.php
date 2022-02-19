<?php

namespace Supermetrics\Infrastructure\Database\Repositories;
use JetBrains\PhpStorm\Pure;
use Supermetrics\Domain\User\EmailAddress;
use Supermetrics\Domain\User\Interfaces\IUserRepository;
use Supermetrics\Domain\User\User;

class UserRepository implements IUserRepository
{

    #[Pure] public function getUserNameByEmail(EmailAddress $emailAddress): User
    {
        return new User("The User");
    }
}
