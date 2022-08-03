<?php

namespace Modules\City\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\State\Entities\State;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'state_id',
    ];

    public function Status()
    {
        return $this->status ? "Active" : "In Active";
    }


    public function scopeStatus($query)
    {
        return $query->whereStatus(true);
    }

    public function scopeHasstate($query)
    {
        return $query->whereHas('state', function ($query) {
            $query->whereStatus(1);
        });
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    protected static function newFactory()
    {
        return \Modules\City\Database\factories\CityFactory::new();
    }
}
