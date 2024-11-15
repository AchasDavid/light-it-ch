<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientCreationRequest;
use App\Services\PatientsService;

class PatientsController
{
    public function __construct(protected PatientsService $service)
    {
    }

    public function create(PatientCreationRequest $request)
    {
        try {
            $response = $this->service->create($request);

            if ($response) {
                return 'Patient registered successfully.';
            } else {
                return'Patient could not be registered.';
            }
        } catch (\Throwable $th) {
            return 'There was a problem processing the request.';
        }
    }
}
