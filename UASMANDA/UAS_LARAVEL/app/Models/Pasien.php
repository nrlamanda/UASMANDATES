<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'dokter_id', 'email', 'nomor', 'alamat'];

    public function dokter():BelongsTo
    {
        return $this->belongsTo('\App\Models\Dokter');
    }

    public function getRouteKeyName()
    {
        return "id";
    }
}
