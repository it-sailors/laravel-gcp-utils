<?php

namespace ItSailors\Gcp;

use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Dostawca usług dla tej biblioteki. Pozwala na wywołanie w docelowej aplikacji
 * funkcjonalności tej biblioteki i rejestruje potrzebne zależności.
 *
 * @author Michał Prusak <michal.prusak@itsailors.tech>
 * @package ItSailors\Gcp
 */
class GcpServiceProvider extends ServiceProvider
{
    /**
     * Zebranie i rozruch usług dostarczanych przez tę bibliotekę.
     * Tu idą wszystkie deklaracje ścieżek, operacje kopiowania lub
     * scalania plików konfiguracyjnych, itd.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(base_path("config/other/routes.php"));
    }
}
