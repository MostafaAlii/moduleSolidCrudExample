<?php
namespace Section\Domain\Support\SaveModal;
use Section\Domain\Support\SaveModal\Field;
class IntegerField extends Field {
    public function execute() {
        if(!is_int($this->value)) {
            throw new \Exception('Value must be integer');
        } else {
            return $this->value;
        }
        return $this->value;
    }
}
