<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaprodiController extends Controller
{
    public function kaprodi()
    {
        return view('kaprodi/pilihmenu');
    }
}
