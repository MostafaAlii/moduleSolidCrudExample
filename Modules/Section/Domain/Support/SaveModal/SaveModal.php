<?php
namespace Section\Domain\Support\SaveModal;
use Illuminate\Database\Eloquent\Model;
use Section\Domain\Support\SaveModal\Field;
class SaveModal {
    private Model $model;
    private array $data;
    public function __construct(Model $model, array $data) {
        $this->model = $model;
        $this->data = $data;
    }

    public function execute(): Model {
        foreach ($this->data as $key => $value) {
            $this->model->{$key} = $this->saveableField($key)->setValue($value)->execute();
        }
        $this->model->save();
        return $this->model;
    }



    private function saveableField($key): Field {
        return $this->model->saveableFields()[$key];
    }
}
