<?php

namespace App\Http\Controllers;

use App\Models\Collections\SchoolsCollection;
use App\Repositories\DataRepository;
use App\Repositories\MysqlDataRepository;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    private DataRepository $dataRepository;

    public function __construct()
    {
        $this->dataRepository = new MysqlDataRepository();
    }

    public function index()
    {
        return view('pages.search');
    }

    public function showAll()
    {
        $data = $this->dataRepository->all();

        return view('pages.search', [
            'all' => $data
        ]);
    }

    public function showUnique()
    {
        $data = $this->dataRepository->unique();

        return view('pages.search', [
            'unique' => $data
        ]);
    }

    public function showOneSpecific()
    {
        $name = 'RTU';
        $data = $this->dataRepository->oneSpecific($name);

        return view('pages.search', [
            'oneSpecific' => $data
        ]);
    }

    public function showCountSpecific()
    {
        $name = 'LLU';
        $data = $this->dataRepository->countSpecific($name);

        return view('pages.search', [
            'school' => $name,
            'countSpecific' => $data
        ]);
    }

    public function showJoin()
    {
        $data = $this->dataRepository->join();

        return view('pages.search', [
            'join' => $data
        ]);
    }

    public function showUsersSkills()
    {
        $data = $this->dataRepository->joinUsersSkills();

        return view('pages.search', [
            'usersSkills' => $data
        ]);
    }

    public function querySamples()
    {
        //  usable queries to test data fetching

//        $data = $this->dataRepository->groupSkills();
//        $data = $this->dataRepository->joinUserToSchool();
//        $data = $this->dataRepository->countUserDegrees();
//        $data = $this->dataRepository->userZipCode();
//        $data = $this->dataRepository->userLanguage();
        $data = $this->dataRepository->userPhone();

        echo "<pre>";
        var_dump($data);die;
    }
}
