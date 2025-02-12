<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Secure extends Controller
{
    public function enkripsi(){
		$encrypted = Crypt::encryptString('Tes pemrograman Anwar');
		$decrypted = Crypt::decryptString($encrypted);
 
		echo "Hasil Enkripsi : " . $encrypted;
		echo "<br/>";
		echo "<br/>";
		echo "Hasil Dekripsi : " . $decrypted;
	}
}
