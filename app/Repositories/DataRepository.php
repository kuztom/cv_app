<?php

namespace App\Repositories;

interface DataRepository
{
    public function all();
    public function unique();
    public function oneSpecific();
    public function countSpecific(string $name);
    public function joinUsersSkills();
}
