<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Traits;

use Psr\Http\Message\StreamInterface;

trait MessageTrait {
    protected \Psr\Http\Message\MessageInterface $psr7;

    public function getProtocolVersion() {
        return $this->psr7->getProtocolVersion();
    }

    public function withProtocolVersion($version) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withProtocolVersion($version);
        return $new;
    }

    public function getHeaders() {
        return $this->psr7->getHeaders();
    }

    public function hasHeader($name) {
        return $this->psr7->hasHeader($name);
    }

    public function getHeader($name) {
        return $this->psr7->getHeader($name);
    }

    public function getHeaderLine($name) {
        return $this->psr7->getHeaderLine($name);
    }

    public function withHeader($name, $value) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withHeader($name, $value);
        return $new;
    }

    public function withAddedHeader($name, $value) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withAddedHeader($name, $value);
        return $new;
    }

    public function withoutHeader($name) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withoutHeader($name);
        return $new;
    }

    public function getBody() {
        return $this->psr7->getBody();
    }

    public function withBody(StreamInterface $body) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withBody($body);
        return $new;
    }
}
