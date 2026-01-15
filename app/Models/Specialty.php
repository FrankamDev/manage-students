<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $fillable = [
        'code',
        'name',
        'description',
    ];

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
