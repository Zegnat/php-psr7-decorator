<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Abstracts;

use \Psr\Http\Message\RequestInterface;

abstract class AbstractRequestDecorator implements RequestInterface {
    use \Zegnat\Psr7Decorator\Traits\RequestTrait;

    public function __construct(RequestInterface $request) {
        $this->psr7 = $request;
    }
}
