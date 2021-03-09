<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Tests;

class StreamTest extends \Http\Psr7Test\StreamIntegrationTest
{
    public function createStream($data)
    {
        // Cannot use the factory way, because the $data used is incompatible.
        // $base = (new \Nyholm\Psr7\Factory\Psr17Factory())->createStream($data);
        $base = \Nyholm\Psr7\Stream::create($data);
        return new class($base) extends \Zegnat\Psr7Decorator\Abstracts\AbstractStreamDecorator {};
    }
}
