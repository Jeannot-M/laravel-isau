<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded=[];

    public function scopeStatus($query)
    {
        return $query->where('status', '=', 1)->get();
    }

    // public function getStatusAttribute($attributes)
    // {
    //     # code...
    //     return [
    //         '0' => "En attente",
    //         '1' => "En ligne"
    //     ][$attributes];
    // }
}
