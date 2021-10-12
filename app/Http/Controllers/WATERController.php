<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expedition;

class WATERController extends Controller
{
    public function sendExpedition(Expedition $expedition) {
        return $this->moveTeam($expedition);
    }

    private function moveTeam(Expedition $expedition) {
        $expedition->state = "Explorada";
        $expedition->hasWater = random_int(0,2) >= 1;
        $expedition->isDrinkable = $expedition->hasWater ? null : false;
        return $expedition;
    }
}
