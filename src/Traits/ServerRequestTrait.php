<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Traits;

trait ServerRequestTrait {
    use RequestTrait;

    protected \Psr\Http\Message\ServerRequestInterface $psr7;

    public function getServerParams() {
        return $this->psr7->getServerParams();
    }

    public function getCookieParams() {
        return $this->psr7->getCookieParams();
    }

    public function withCookieParams(array $cookies) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withCookieParams($cookies);
        return $new;
    }

    public function getQueryParams() {
        return $this->psr7->getQueryParams();
    }

    public function withQueryParams(array $query) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withQueryParams($query);
        return $new;
    }

    public function getUploadedFiles() {
        return $this->psr7->getUploadedFiles();
    }

    public function withUploadedFiles(array $uploadedFiles) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withUploadedFiles($uploadedFiles);
        return $new;
    }

    public function getParsedBody() {
        return $this->psr7->getParsedBody();
    }

    public function withParsedBody($data) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withParsedBody($data);
        return $new;
    }

    public function getAttributes() {
        return $this->psr7->getAttributes();
    }

    public function getAttribute($name, $default = null) {
        return $this->psr7->getAttribute($name, $default);
    }

    public function withAttribute($name, $value) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withAttribute($name, $value);
        return $new;
    }

    public function withoutAttribute($name) {
        $new = clone $this;
        $new->psr7 = $this->psr7->withoutAttribute($name);
        return $new;
    }
}
