<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expedition;

class ExpeditionTranslator extends Controller
{
    public function translateExpedition($expeditionContainer) {
        if ($expeditionContainer != null) {
            $expedition = new Expedition;
            $expedition->uuid = $expeditionContainer->uniqueID;
            $expedition->coordinateX = $expeditionContainer->x;
            $expedition->coordinateY = $expeditionContainer->y;
            $expedition->size = $expeditionContainer->tamano;
            $expedition->state = $expeditionContainer->estado;
            return $expedition;
        }
        return null;
    }
}
