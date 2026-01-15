<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    protected $fillable = [
        'libelle',
        'date_debut',
        'date_fin',
        'is_active',
    ];
}
