<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Tests;

class UploadedFileTest extends \Http\Psr7Test\UploadedFileIntegrationTest
{
    public function createSubject()
    {
        // Must have content in the stream, because php-http/psr7-integration-tests does not support size 0.
        // https://github.com/php-http/psr7-integration-tests/pull/48
        $stream = (new \Nyholm\Psr7\Factory\Psr17Factory())->createStream('1');
        return $base = (new \Nyholm\Psr7\Factory\Psr17Factory())->createUploadedFile($stream);
        return new class($base) extends \Zegnat\Psr7Decorator\Abstracts\AbstractUploadedFileDecorator {};
    }
}
