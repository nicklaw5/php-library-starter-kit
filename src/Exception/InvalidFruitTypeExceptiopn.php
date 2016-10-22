<?php
namespace Fruit\Exception;

class InvalidFruitTypeExceptiopn extends FruitException {

    public function __construct($message) {
        parent::__construct($message, 0);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
