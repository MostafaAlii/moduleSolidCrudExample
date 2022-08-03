<?php
namespace Section\Domain\Support\SaveModal;
use Section\Domain\Support\SaveModal\Field;
class BooleanField extends Field {
    public function execute() {
        return $this->value;
    }
}
