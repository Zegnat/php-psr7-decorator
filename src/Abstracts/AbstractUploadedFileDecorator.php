<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Abstracts;

use \Psr\Http\Message\UploadedFileInterface;

abstract class AbstractUploadedFileDecorator implements UploadedFileInterface {
    use \Zegnat\Psr7Decorator\Traits\UploadedFileTrait;

    public function __construct(UploadedFileInterface $file) {
        $this->psr7 = $file;
    }
}
