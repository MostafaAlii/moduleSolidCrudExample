<?php

namespace Modules\State\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\City\Entities\City;
use Modules\Country\Entities\Country;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'country_id',
    ];

    public function Status()
    {
        return $this->status ? "Active" : "In Active";
    }

    
    public function scopeStatus ($query) 
    {
        return $query->whereStatus(true);
    }

    
    public function scopeHasCountry ($query) 
    {
        return $query->whereHas('country', function ($query) {
            $query->whereStatus(1);
        });
    }

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }

    public function citys()
    {
        return $this->hasMany(City::class,'state_id');
    }

    protected static function newFactory()
    {
        return \Modules\State\Database\factories\StateFactory::new();
    }
}
