<?php

namespace Phambinh\Cms\Support\Traits;

trait FullName
{
    public function getFullNameAttribute()
    {
        return $this->last_name .' '. $this->first_name;
    }
}
