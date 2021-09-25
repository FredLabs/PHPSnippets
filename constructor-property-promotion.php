<?php

class User
{
    public function __construct(
        private string $first_name = '',
        private string $last_name = '',
        private string $email = ''
    ) {}

    public function getUser()
    {
        return $this->first_name . ' ' . $this->last_name . ' (' . $this->email . ')';
    }
}

$user = new User('Tom', 'Jones', 'tom.jones@example.com');

print ("<p><strong>pre Output:</strong> {$user->getUser()}</p>");