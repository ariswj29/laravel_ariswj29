<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    protected $table = 'rumah_sakits';
    protected $fillable = ['nama', 'alamat', 'email', 'telepon'];
    public $timestamps = false;

    public function pasien()
    {
        return $this->hasMany(Pasien::class);
    }
}
