<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Tests;

class UriTest extends \Http\Psr7Test\UriIntegrationTest
{
    public function createUri($uri)
    {
        $base = (new \Nyholm\Psr7\Factory\Psr17Factory())->createUri($uri);
        return new class($base) extends \Zegnat\Psr7Decorator\Abstracts\AbstractUriDecorator {};
    }
}
