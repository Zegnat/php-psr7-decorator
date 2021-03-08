<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Abstracts;

use \Psr\Http\Message\ResponseInterface;

abstract class AbstractResponseDecorator implements ResponseInterface {
    use \Zegnat\Psr7Decorator\Traits\ResponseTrait;

    public function __construct(ResponseInterface $response) {
        $this->psr7 = $response;
    }
}
