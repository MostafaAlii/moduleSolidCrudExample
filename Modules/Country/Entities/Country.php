<?php
namespace Country\Entities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\State\Entities\State;
class Country extends Model {
    use HasFactory;
    protected $fillable = ['name', 'status'];

    public function Status() {
        return $this->status ? "Active" : "In Active";
    }

    public function scopeStatus($query) {
        return $query->whereStatus(true);
    }

    public function scopeHasStates($query)
    {
        return $query->whereHas('states', function ($query) {
            $query->whereStatus(1);
        });
    }

    public function states(): HasMany {
        return $this->hasMany(State::class);
    }

    /*protected static function newFactory()
    {
        return \Modules\Country\Database\factories\CountryFactory::new();
    }*/
}
