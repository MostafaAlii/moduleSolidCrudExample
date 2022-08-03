<?php
namespace Section\Domain\Support\SaveModal;
use Illuminate\Support\Carbon;
use Section\Domain\Support\SaveModal\Field;
class DatetimeField extends Field {
    public function execute() {
        if(!date($this->value)) {
            throw new \Exception('Value must be datetime');
        } else {
            return $this->value;
        }
        return Carbon::parse($this->value)->toDateTimeString();
    }
}
