<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $table = 'lapangans';
    protected $fillable = ['nama', 'jenis_lantai', 'harga_pagi', 'harga_malam', 'id_futsal', 'foto1', 'foto2', 'foto3'];
    protected $primaryKey = 'id_lapangan';

    public function futsal()
    {
        return $this->belongsTo('App\Futsal', 'id_futsal');
    }
}
