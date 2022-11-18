<?php

namespace Gustavoviniciusdemorais\GustavoPackageBuilder;

use Gustavoviniciusdemorais\GustavoPackageBuilder\Actions\GustavoPackageBuilderAction;

class GustavoPackageBuilder
{

    public function check()
    {
        $action = new GustavoPackageBuilderAction();
        return $action->execute();
    }
}
