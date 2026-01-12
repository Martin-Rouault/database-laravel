<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'theme',
        'lang'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
