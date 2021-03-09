<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Tests;

class ResponseTest extends \Http\Psr7Test\ResponseIntegrationTest
{
    public function createSubject()
    {
        $base = (new \Nyholm\Psr7\Factory\Psr17Factory())->createResponse();
        return new class($base) extends \Zegnat\Psr7Decorator\Abstracts\AbstractResponseDecorator {};
    }
}
