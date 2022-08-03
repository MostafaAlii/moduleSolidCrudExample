<?php
namespace Section\Domain\Support\SaveModal;
abstract class Field {
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public static function createNew() {
        return new static();
    }
    
    abstract public function execute();
}
