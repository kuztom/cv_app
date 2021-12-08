<?php

namespace App\Models\Collections;

use App\Models\School;

class SchoolsCollection
{
    private array $schools;

    public function __construct(array $schools = [])
    {
        foreach ($schools as $school)
        {
            $this->add($school);
        }
    }

    public function add(School $school): void
    {
        $this->schools[$school->getId()] = $school;
    }

    public function getSchools(): array
    {
        return $this->schools;
    }
}
