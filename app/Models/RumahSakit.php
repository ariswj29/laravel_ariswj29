<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RumahSakit extends Model
{
    use SoftDeletes;
    protected $table = 'rumah_sakits';
    protected $fillable = ['nama', 'alamat', 'email', 'telepon'];

    public function pasien()
    {
        return $this->hasMany(Pasien::class);
    }
}
