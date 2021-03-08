<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Traits;

trait ResponseTrait {
    use MessageTrait;

    protected \Psr\Http\Message\ResponseInterface $psr7;

    public function getStatusCode() {
        return $this->psr7->getStatusCode();
    }

    public function withStatus($code, $reasonPhrase = '') {
        $new = clone $this;
        $new->psr7 = $this->psr7->withStatus($code, $reasonPhrase);
        return $new;
    }

    public function getReasonPhrase() {
        return $this->psr7->getReasonPhrase();
    }
}
