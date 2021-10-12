<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ExpeditionRequester;
use App\Http\Controllers\ExpeditionTranslator;

class ExpeditionAdapter extends Controller
{
    public function getNewExpedition() {
        $requester = new ExpeditionRequester();
        $translator = new ExpeditionTranslator;
        $expeditionContainer = $requester->requestExpedition();
        if ($expeditionContainer != null) {
            return $translator->translateExpedition($expeditionContainer);
        }
        else {
            return null;
        }
    }
}
