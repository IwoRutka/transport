<?php

namespace App\ErrorHandler;

use Symfony\Component\ErrorHandler\ErrorHandler;

class CustomErrorHandler extends ErrorHandler
{
    public function __construct()
    {
        parent::__construct();
        error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
    }
}