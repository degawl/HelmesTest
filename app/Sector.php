<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = 'sectors';

    public function sector_class()
    {
        return $this->belongsTo(Sector::class);
    }
}
