<?php

namespace App;

class Router
{
    private array $handlers;

    private const METHOD_GET = 'GEAT';

    private const METHOD_POST = 'POST';

    public function get(string $path, callable $handler): void
    {
        $this->addHandler(self::METHOD_GET, $path, $handler);
    }

    public function post(string $path, callable $handler): void
    {
        $this->addHandler(self::METHOD_POST, $path, $handler);
    }

    public function run(): void
    {
    }

    private function addHandler(string $method, string $path, callable $handler): void
    {
        $this->handlers[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler,
        ];
    }
}
