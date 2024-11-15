<?php

namespace App\Services;

use App\Http\Requests\PatientCreationRequest;
use App\Repositories\PatientsRepository;

class PatientsService
{
    public function __construct(protected PatientsRepository $patientsRepository)
    {
    }
}
