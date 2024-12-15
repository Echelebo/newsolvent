<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model {
    protected $table = "card";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}