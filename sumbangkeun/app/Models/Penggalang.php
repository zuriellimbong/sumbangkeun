<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggalang extends Model
{
    protected $fillable = ['judul', 'nama', 'status', 'kategori', 'biaya', 'url'];
}
