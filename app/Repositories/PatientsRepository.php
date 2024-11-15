<?php

namespace App\Repositories;

use App\Http\Requests\PatientCreationRequest;
use App\Models\Patient;

class PatientsRepository
{
    public function __construct(protected Patient $model)
    {
    }

    public function create(PatientCreationRequest $request, $path)
    {
        return $this->model::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phoneNumber'),
            'docPhoto' => $path,
        ]);
    }
}
