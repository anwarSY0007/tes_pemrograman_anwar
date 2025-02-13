<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiboController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Data pertama
        $data = [5,4,1,6,8,9,7,6,3,8,7,8,10];
        $dataLebihDari6 = array_filter($data, function($nilai) {
            return $nilai > 6;
        });
        
        // Data kedua
        $number = [12,7,9,14,6,3,8,10,5,4];
        $bilanganGenap = array_filter($number, function($nilai) {
            return $nilai % 2 == 0;
        });
        $jumlahGenap = count($bilanganGenap);
        
        // Fibonacci dari dua bilangan terbesar masing-masing array
        $fibonacci = [];
        $fibonacci[] = max($data);  // 10
        $fibonacci[] = max($number); // 14
        
        for($i = 2; $i < 10; $i++) {
            $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
        }

        return view('fibo', compact(
            'dataLebihDari6',
            'bilanganGenap',
            'jumlahGenap',
            'fibonacci'
        ));
    }
}
