<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Tests;

class RequestTest extends \Http\Psr7Test\RequestIntegrationTest
{
    public function createSubject()
    {
        $base = (new \Nyholm\Psr7\Factory\Psr17Factory())->createRequest('GET', '/');
        return new class($base) extends \Zegnat\Psr7Decorator\Abstracts\AbstractRequestDecorator {};
    }
}
