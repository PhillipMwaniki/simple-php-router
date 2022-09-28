<?php

namespace App\Handler;

class Contact
{
    public function execute(): void
    {
        require_once dirname(__FILE__, 3). '/templates/contact.html';
    }

    public function store(array $request): void
    {
        echo 'Name is ' . $request['name'];
    }
}
