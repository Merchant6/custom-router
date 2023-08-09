<?php

namespace App\Handler;

class Contact
{
    public function execute(array $params = []): void
    {
        require_once __DIR__ . '/../../templates/contact.php';
    }
}