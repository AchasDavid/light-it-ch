<?php

namespace App\Services;

use App\Http\Requests\PatientCreationRequest;
use App\Repositories\PatientsRepository;

class PatientsService
{
    public function __construct(protected PatientsRepository $patientsRepository)
    {
    }

    public function create(PatientCreationRequest $request)
    {
        $image = $request->file('docPhoto');
        $path = $image->storeAs('patients', $image->getClientOriginalName(), 'public');

        return $this->patientsRepository->create($request, $path);
    }
}
