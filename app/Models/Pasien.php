<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasiens';
    protected $fillable = ['nama', 'alamat', 'email', 'telepon', 'rumah_sakit_id'];
    public $timestamps = false;

    public function rumahSakit()
    {
        return $this->belongsTo(RumahSakit::class);
    }
}
