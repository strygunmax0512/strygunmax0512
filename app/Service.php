<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function girl()
    {
        return $this->belongsTo(Girl::class);
    }
}
