<?php

namespace App\Handler;

class Contact
{
    public function execute(): void
    {
        require_once __DIR__ . '/../../templates/contact.phtml';
    }
}
