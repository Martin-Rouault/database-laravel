<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
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
