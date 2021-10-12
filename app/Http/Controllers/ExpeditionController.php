<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expedition;
use App\Http\Controllers\ExpeditionAdapter;
use App\Http\Controllers\WATERController;
use App\Http\Controllers\SEWATController;
use Illuminate\Support\Facades\Http;

class ExpeditionController extends Controller
{
    public function getNewExpedition() {
        $adapter = new ExpeditionAdapter;
        $newExpedition = $adapter->getNewExpedition();
        $newExpedition->save();
        return $newExpedition;
    }

    public function sendExpedition(Request $request) {
        $expedition = Expedition::where('uuid', $request->input('uuid'))->first();
        $expeditionTeam = new WATERController;
        $exploredExpedition = $expeditionTeam->sendExpedition($expedition);
        $exploredExpedition->save();
        $url = (cache()->get('url') != null) ? cache()->get('url') : config('expedition.url');
        $response = Http::post($url, ['expedition' => $exploredExpedition]);
        return $exploredExpedition;
    }

    public function analyzeWater(Request $request) {
        $expedition = Expedition::where('uuid', $request->input('uuid'))->first();
        $cientificExpeditionTeam = new SEWATController;
        $analyzedExpedition = $cientificExpeditionTeam->analyzeWater($expedition);
        $analyzedExpedition->save();
        $url = (cache()->get('url') != null) ? cache()->get('url') : config('expedition.url');
        $response = Http::post($url, ['expedition' => $analyzedExpedition]);
        return $analyzedExpedition;
    }

    public function fixExpedition(Request $request) {
        $expedition = Expedition::where('uuid', $request->input('uuid'))->first();
        $expedition->coordinateX = $request->input('coordinateX');
        $expedition->coordinateY = $request->input('coordinateY');
        $expedition->save();
        $url = (cache()->get('url') != null) ? cache()->get('url') : config('expedition.url');
        $response = Http::put($url, ['expedition' => $expedition]);
        return $expedition;
    }

    public function setExpeditionURL(Request $request) {
        $url = $request->input('url');
        if ($url != null) {
            cache()->put('url', $url);
        }
    }
}
