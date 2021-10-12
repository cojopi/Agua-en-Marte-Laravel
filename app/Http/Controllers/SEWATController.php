<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expedition;

class SEWATController extends Controller
{
    public function analyzeWater($expedition) {
        return $this->doMathThings($expedition);
    }

    private function doMathThings($expedition) {
        $expedition->state = "Analizada";
        $expedition->isDrinkable = ($expedition->hasWater == true) ? random_int(0,1) == 1 : false;
        return $expedition;
    }
}
