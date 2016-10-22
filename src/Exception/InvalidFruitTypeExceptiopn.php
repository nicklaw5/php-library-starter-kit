<?php
namespace Fruit\Exception;

class InvalidFruitTypeExceptiopn extends FruitException {

    public function __construct($message, $code = 0) {}

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
