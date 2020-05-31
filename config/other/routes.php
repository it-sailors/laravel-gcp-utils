<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Punkty końcowe (endpoints)
|--------------------------------------------------------------------------
|
| Tu znajdują się eksponowane i rejestrowane przez bibliotekę ścieżki
| (routes, endpoints) wraz z powiązaniem do obsługujących je logiki.
| Deklaracja nowych ścieżek wygląda tak samo, jak w czystym Laravelu.
|
*/

Route::get("/_ah/warmup", "ItSailors\Gcp\WarmupEndpointHandler");