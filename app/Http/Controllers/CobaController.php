<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    Public Function index ()
    {
        Return 'test Berhasil';
    }

    Public Function urutan ($ke)
    {
        Return view ('urutan', ['ke' => $ke]);
    }
}
