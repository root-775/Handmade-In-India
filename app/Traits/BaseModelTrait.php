<?php

namespace App\Traits;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

trait BaseModelTrait
{
    public function getUidAttribute()
    {
        return encodeId($this->id);
    }

    public function scopeActive(Builder $query) {
        $query->where('status', 1);
    }

}
