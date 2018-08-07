<?php

namespace App\Http\Controllers;

use App\Services\NumberService;
use Illuminate\Http\Request;

class MarlinController extends Controller
{
    public function index(NumberService $numberService){
        $hasil = collect();
        for($i = 1; $i<= 999; $i++){

            if($this->hitungMB($hasil) == 5){
                break;
            }

            if($this->hitungMB($hasil) == 2){
                if ($numberService->kelipatanTiga($i) && $numberService->kelipatanLima($i)) {
                    $hasil->push([
                        "Angka" => $i,
                        "Text" => "Marlin Booking"
                    ]);

                    continue;
                }

                if ($numberService->kelipatanTiga($i)) {
                    $hasil->push([
                        "Angka" => $i,
                        "Text" => "Booking"
                    ]);

                    continue;
                }

                if ($numberService->kelipatanLima($i)) {
                    $hasil->push([
                        "Angka" => $i,
                        "Text" => "Marlin"
                    ]);

                    continue;
                }
            }else {
                if ($numberService->kelipatanTiga($i) && $numberService->kelipatanLima($i)) {
                    $hasil->push([
                        "Angka" => $i,
                        "Text" => "Marlin Booking"
                    ]);

                    continue;
                }

                if ($numberService->kelipatanTiga($i)) {
                    $hasil->push([
                        "Angka" => $i,
                        "Text" => "Marlin"
                    ]);

                    continue;
                }

                if ($numberService->kelipatanLima($i)) {
                    $hasil->push([
                        "Angka" => $i,
                        "Text" => "Booking"
                    ]);

                    continue;
                }
            }
        }

        return view('hasil', compact('hasil'));
    }

    public function hitungMB($hasil)
    {
        $total = $hasil->where('Text', 'Marlin Booking')->count();
        return $total;
    }
}
