<?php

declare(strict_types=1);

namespace Zegnat\Psr7Decorator\Abstracts;

use \Psr\Http\Message\MessageInterface;

abstract class AbstractMessageDecorator implements MessageInterface {
    use \Zegnat\Psr7Decorator\Traits\MessageTrait;

    public function __construct(MessageInterface $message) {
        $this->psr7 = $message;
    }
}
