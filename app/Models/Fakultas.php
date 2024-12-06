<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'fakultas';

    protected $guarded = [];

    public function universitas()
    {
        return $this->belongsTo(Universitas::class);
    }
}
