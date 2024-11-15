<?php

namespace App\Repositories;

use App\Http\Requests\PatientCreationRequest;
use App\Models\Patient;

class PatientsRepository
{
    public function __construct(protected Patient $model)
    {
    }
}
