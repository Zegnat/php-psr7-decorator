<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Abstracts;

use \Psr\Http\Message\StreamInterface;

abstract class AbstractStreamDecorator implements StreamInterface {
    use \Zegnat\Psr7Decorator\Traits\StreamTrait;

    public function __construct(StreamInterface $stream) {
        $this->psr7 = $stream;
    }
}
