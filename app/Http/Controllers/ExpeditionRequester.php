<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExpeditionRequester extends Controller
{
    public function requestExpedition() {
        try {
            $url = (cache()->get('url') != null) ? cache()->get('url') : config('expedition.url');
            $response = json_decode(Http::get($url));
            if ($response != null && isset($response->expedition)) {
                $expedition = json_decode($response->expedition);
                return $expedition;
            }
            else {
                return null;
            }
        }
        catch (ConnectionException $e) {
            return null;
        }
    }
}
