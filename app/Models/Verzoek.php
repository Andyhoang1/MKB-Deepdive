<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verzoek extends Model
{
    use HasFactory;
    protected $table = 'verzoeken';

    protected $fillable = [
        'verzoek_titel',
        'verzoek_omschrijving',
        'verzoek_status',
        'verzoek_body',
        'verzoek_beloning',
        'bedrijf_id',
    ];

    // bedrijf_id is a foreign key which points to the id column in the bedrijven table
    public function bedrijf()
    {
        return $this->belongsTo(Bedrijf::class, 'bedrijf_id');
    }
}