<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    use HasFactory;

    protected $fillable = [
        'specialty_id',
        'code',
        'name',
        'coefficient',
        'module',
    ];

    protected $casts = [
        'coefficient' => 'integer',
        'module' => 'integer',
    ];
    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }
}
