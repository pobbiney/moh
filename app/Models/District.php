<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function regionname()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
