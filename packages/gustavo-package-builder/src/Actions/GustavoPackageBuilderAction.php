<?php

namespace Gustavoviniciusdemorais\GustavoPackageBuilder\Actions;

class GustavoPackageBuilderAction
{

    public function execute()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'ok'
        ]);
    }
}
