<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bedrijf extends Model
{
    use HasFactory;
    protected $table = 'bedrijven';

    protected $fillable = [
        'bedrijf_naam',
        'bedrijf_email',
        'bedrijf_telefoon',
        'bedrijf_website',
    ];

    public function verzoeken()
    {
        return $this->hasMany(Verzoek::class);
    }
}