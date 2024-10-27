<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use SoftDeletes;
    protected $table = 'pasiens';
    protected $fillable = ['nama', 'alamat', 'email', 'telepon', 'rumah_sakit_id'];

    public function rumahSakit()
    {
        return $this->belongsTo(RumahSakit::class);
    }
}
