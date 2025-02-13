<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EnkripController extends Controller
{
    public function index()
    {
        return view('enkrip_dekrip');
    }

    public function encrypt(Request $request)
{
    $plaintext = $request->input('plaintext');
    $ciphertext = Crypt::encryptString($plaintext);
    return back()->with('result', $ciphertext);
}

public function decrypt(Request $request)
{
    $ciphertext = $request->input('ciphertext');
    try {
        $plaintext = Crypt::decryptString($ciphertext);
    } catch (\Exception $e) {
        $plaintext = "Error: Ciphertext tidak valid!";
    }
    return back()->with('result', $plaintext);
}
}
