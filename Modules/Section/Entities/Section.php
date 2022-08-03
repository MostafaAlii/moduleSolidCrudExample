<?php
namespace Section\Entities;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Section\Domain\Support\SaveModal\{StringField, BooleanField, LongTextField};
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Section extends Model {
    use HasFactory, HasTranslations;
    protected $fillable = ['name', 'status', 'notes'];
    public $translatable = ['name'];
    protected $table = 'sections';
    public function saveableFields(): array {
        return [
            'name' => StringField::createNew(),
            'status' => BooleanField::createNew(),
            'notes' => LongTextField::createNew(),
        ];
    }

    protected static function newFactory() {
        //return \Modules\Section\Database\factories\SectionFactory::new();
    }
}
