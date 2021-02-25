<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Futsal extends Model
{
    protected $table = 'futsals';
    protected $fillable = ['nama', 'alamat', 'telepon', 'long', 'lat', 'admin', 'jam_buka', 'jam_tutup', 'fasilitas', 'foto', 'id_user'];
    protected $primaryKey = 'id_futsal';

    public function lapangan()
    {
        return $this->hasMany('App\Lapangan');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
