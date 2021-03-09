<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Traits;

use Psr\Http\Message\UriInterface;

trait RequestTrait {
    use MessageTrait;

    // protected \Psr\Http\Message\RequestInterface $psr7;
    protected $psr7;

    public function getRequestTarget() {
        return $this->psr7->getRequestTarget();
    }

    public function withRequestTarget($requestTarget) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withRequestTarget($requestTarget);
        return $new;
    }

    public function getMethod() {
        return $this->psr7->getMethod();
    }

    public function withMethod($method) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withMethod($method);
        return $new;
    }

    public function getUri() {
        return $this->psr7->getUri();
    }

    public function withUri(UriInterface $uri, $preserveHost = false) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withUri($uri, $preserveHost);
        return $new;
    }
}
