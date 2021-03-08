<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Abstracts;

use \Psr\Http\Message\ServerRequestInterface;

abstract class AbstractServerRequestDecorator implements ServerRequestInterface {
    use \Zegnat\Psr7Decorator\Traits\ServerRequestTrait;

    public function __construct(ServerRequestInterface $request) {
        $this->psr7 = $request;
    }
}
