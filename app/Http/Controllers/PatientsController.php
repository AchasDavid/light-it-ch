<?php

namespace App\Http\Controllers;

use App\Services\PatientsService;

class PatientsController
{
    public function __construct(protected PatientsService $service)
    {
    }
}
