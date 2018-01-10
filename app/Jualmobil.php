<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jualmobil extends Model
{
    //
    public function pelanggan()
    {
        return $this->belongsTo('App\Pelanggan');
    }
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
    public function tahun()
    {
        return $this->belongsTo('App\Tahun');
    }
}
