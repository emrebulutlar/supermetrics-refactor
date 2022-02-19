<?php

namespace Supermetrics\Domain\User\Interfaces;

use Supermetrics\Domain\User\EmailAddress;
use Supermetrics\Domain\User\User;

interface IUserRepository
{
    public function getUserNameByEmail(EmailAddress $emailAddress): User;
}
