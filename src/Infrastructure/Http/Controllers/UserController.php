<?php

namespace Supermetrics\Infrastructure\Http\Controllers;

use Supermetrics\Domain\User\EmailAddress;
use Supermetrics\Domain\User\UserService;

class UserController
{
    public function __construct(
        private readonly UserService $userService
    ) {
    }

    public function __invoke(): string
    {
        return $this->userService->findUser(
            (new EmailAddress($_REQUEST['email'] ?? $_REQUEST['masterEmail']))
        )->getName();
    }
}
