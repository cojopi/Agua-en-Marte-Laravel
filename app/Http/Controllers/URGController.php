<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ExpeditionController;

class URGController extends Controller
{
    public function interface() {
        $expedition = new ExpeditionController;
        $newExpedition = $expedition->getNewExpedition();
        return view('URGInterface', ['expedition' => $newExpedition]);
    }
}
