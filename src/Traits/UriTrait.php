<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Traits;

trait UriTrait {
    // protected \Psr\Http\Message\UriInterface $psr7;
    protected $psr7;

    public function getScheme() {
        return $this->psr7->getScheme();
    }

    public function getAuthority() {
        return $this->psr7->getAuthority();
    }

    public function getUserInfo() {
        return $this->psr7->getUserInfo();
    }

    public function getHost() {
        return $this->psr7->getHost();
    }

    public function getPort() {
        return $this->psr7->getPort();
    }

    public function getPath() {
        return $this->psr7->getPath();
    }

    public function getQuery() {
        return $this->psr7->getQuery();
    }

    public function getFragment() {
        return $this->psr7->getFragment();
    }

    public function withScheme($scheme) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withScheme($scheme);
        return $new;
    }

    public function withUserInfo($user, $password = null) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withUserInfo($user, $password);
        return $new;
    }

    public function withHost($host) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withHost($host);
        return $new;
    }

    public function withPort($port) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withPort($port);
        return $new;
    }

    public function withPath($path) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withPath($path);
        return $new;
    }

    public function withQuery($query) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withQuery($query);
        return $new;
    }

    public function withFragment($fragment) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withFragment($fragment);
        return $new;
    }

    public function __toString() {
        return $this->psr7->__toString();
    }
}
