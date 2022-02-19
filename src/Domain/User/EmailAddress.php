<?php

namespace Supermetrics\Domain\User;

class EmailAddress
{
    public const UNKNOWN = "unknown";

    public function __construct(
        private readonly string $emailAddress
    ) {
    }

    public function getValue(): string
    {
        return $this->emailAddress ?? EmailAddress::UNKNOWN;
    }
}
