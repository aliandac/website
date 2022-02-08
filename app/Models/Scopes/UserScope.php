<?php

namespace App\Models\Scopes;

trait UserScope
{

    public function scopeInActive($q){
        return $q->where('active',0);
    }

    public function scopeIsActive($q){
        return $q->where('active',1);
    }
}
