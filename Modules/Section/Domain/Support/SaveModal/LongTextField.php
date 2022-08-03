<?php
namespace Section\Domain\Support\SaveModal;
use Section\Domain\Support\SaveModal\Field;
class LongTextField extends Field {
    public function execute() {
        return $this->value;
    }
}
