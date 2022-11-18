<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GustavoPackageBuilder;

class TestController extends Controller
{
    
    public function index()
    {
        return GustavoPackageBuilder::check();
    }
}
