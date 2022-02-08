<?php

namespace App\Models\Getters;

trait UserGetter
{
    public function getFullNameAttribute($value)
    {
        if(isset($this->attributes['name']) && isset($this->attributes['surname']))
            return ucfirst($this->attributes['name']).' '.$this->attributes['surname'];
    }

}
