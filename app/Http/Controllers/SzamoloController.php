<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SzamoloController extends Controller
{
    public function szamitas() {
        try {

            $validMuvelet = ['osszeadas', 'kivonas', 'szorzas', 'osztas'];
            if(!in_array($_GET['muvelet'], $validMuvelet)) {
                throw new \Exception();
            }

            $a = intval($_GET['a']);
            $b = intval($_GET['b']);

            $eredmeny = 0;

            switch($_GET['muvelet']) {
                case 'osszeadas': $eredmeny = $a + $b; break;
                case 'kivonas': $eredmeny = $a - $b; break;
                case 'szorzas': $eredmeny = $a * $b; break;
                case 'osztas': $eredmeny = $a / $b; break;
            }

            return response()->json(['eredmeny' => $eredmeny]);

        } catch(\Exception $e) {
            return response()->json(['hiba' => 'Hibás kérés!'], 400);
        }

    }

}
