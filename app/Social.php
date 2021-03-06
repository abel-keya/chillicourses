<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'social_logins';

    protected $fillable = ['provider', 'social_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
