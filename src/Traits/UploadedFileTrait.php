<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Traits;

trait UploadedFileTrait {
    protected \Psr\Http\Message\UploadedFileInterface $psr7;

    public function getStream() {
        return $this->psr7->getStream();
    }

    public function moveTo($targetPath) {
        return $this->psr7->moveTo($targetPath);
    }

    public function getSize() {
        return $this->psr7->getSize();
    }

    public function getError() {
        return $this->psr7->getError();
    }

    public function getClientFilename() {
        return $this->psr7->getClientFilename();
    }

    public function getClientMediaType() {
        return $this->psr7->getClientMediaType();
    }
}
