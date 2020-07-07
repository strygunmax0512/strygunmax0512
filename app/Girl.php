<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Girl extends Model
{
    public function service()
    {
        return $this->hasOne(Service::class);
    }
}
