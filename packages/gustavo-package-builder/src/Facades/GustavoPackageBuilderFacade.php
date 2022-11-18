<?php

namespace Gustavoviniciusdemorais\GustavoPackageBuilder\Facades;

use Illuminate\Support\Facades\Facade;

class GustavoPackageBuilderFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'gustavo-package-builder';
    }
}
