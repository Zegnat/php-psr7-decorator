<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Abstracts;

use \Psr\Http\Message\UriInterface;

abstract class AbstractUriDecorator implements UriInterface {
    use \Zegnat\Psr7Decorator\Traits\UriTrait;

    public function __construct(UriInterface $uri) {
        $this->psr7 = $uri;
    }
}
