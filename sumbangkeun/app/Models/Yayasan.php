<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yayasan extends Model
{
    protected $fillable = ['nama', 'status', 'alamat_id', 'deskripsi', 'url'];

    public function alamat ()
    {
        return $this->belongsTo('App\Models\Alamat');
    }
}