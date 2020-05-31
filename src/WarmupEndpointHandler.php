<?php

namespace ItSailors\Gcp;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

/**
 * Kontroler pojedynczej akcji do obsługi funkcji warmup używanej w App Engine.
 * Funkcja warmup służy do minimalizacji bottlenecków wynikających z czasu jakiego
 * potrzebuje maszyna wirtualna, by się zrestartować (deploy/crash/itp.)
 *
 * Więcej informacji w dokumentacji Google Cloud Platform:
 * https://cloud.google.com/appengine/docs/standard/php7/configuring-warmup-requests
 *
 * @author Michał Prusak <michal.prusak@itsailors.tech>
 * @package ItSailors\Gcp
 */
class WarmupEndpointHandler extends Controller
{
    /**
     * Obsługa żądania warmup wysyłanego z infrastruktury Google.
     *
     * @param Request $request Otrzymane przez serwer żądanie HTTP.
     */
    public function __invoke(Request $request)
    {
        // Na ten moment cała logika "warmupu" jest wykonywana przez framework
        // Laravela sam w sobie, dlatego tylko zapiszemy do logu fakt warmupu.
        Log::info("Got warmup request from Google infra. Starting up");
        return;
    }
}