<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penggalang;
use App\Models\Yayasan;
use App\Models\Alamat;

class IndexController extends Controller
{
    public function index()
    {
        $penggalang = Penggalang::latest()->get();
        $yayasan = Yayasan::latest()->get();
        return view('index', compact('penggalang', 'yayasan'));
    }
}
