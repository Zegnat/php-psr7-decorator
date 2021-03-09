<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Traits;

trait StreamTrait {
    // protected \Psr\Http\Message\StreamInterface $psr7;
    protected $psr7;

    public function __toString() {
        return $this->psr7->__toString();
    }

    public function close() {
        return $this->psr7->close();
    }

    public function detach() {
        return $this->psr7->detach();
    }

    public function getSize() {
        return $this->psr7->getSize();
    }

    public function tell() {
        return $this->psr7->tell();
    }

    public function eof() {
        return $this->psr7->eof();
    }

    public function isSeekable() {
        return $this->psr7->isSeekable();
    }

    public function seek($offset, $whence = SEEK_SET) {
        return $this->psr7->seek($offset, $whence);
    }

    public function rewind() {
        return $this->psr7->rewind();
    }

    public function isWritable() {
        return $this->psr7->isWritable();
    }

    public function write($string) {
        return $this->psr7->write($string);
    }

    public function isReadable() {
        return $this->psr7->isReadable();
    }

    public function read($length) {
        return $this->psr7->read($length);
    }

    public function getContents() {
        return $this->psr7->getContents();
    }

    public function getMetadata($key = null) {
        return $this->psr7->getMetadata($key);
    }
}
