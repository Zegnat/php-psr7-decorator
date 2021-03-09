<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Tests;

class ServerRequestTest extends \Http\Psr7Test\ServerRequestIntegrationTest
{
    public function createSubject()
    {
        // Must provide $_SERVER as the integration test is hardcoded to compare against its value.
        $base = (new \Nyholm\Psr7\Factory\Psr17Factory())->createServerRequest('GET', '/', $_SERVER);
        return new class($base) extends \Zegnat\Psr7Decorator\Abstracts\AbstractServerRequestDecorator {};
    }
}
