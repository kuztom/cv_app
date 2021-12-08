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
        $schools = $this->dataRepository->all();

        return view('pages.search', [
            'data'=>$schools
        ]);
    }

    public function showAll()
    {
        $data = $this->dataRepository->all();

//       $data = $this->dataRepository->oneSpecific();
//       $data = $this->dataRepository->countSpecific();
//       $data = $this->dataRepository->join();
//       $data = $this->dataRepository->joinUserSkills();

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
        $data = $this->dataRepository->oneSpecific();

        return view('pages.search', [
            'oneSpecific' => $data
        ]);
    }

    public function showCountSpecific()
    {
        $name = 'LLU';
        $data = $this->dataRepository->countSpecific($name);

//        echo "<pre>";
//        var_dump($data);die;

        return view('pages.search', [
            'school' => $name,
            'countSpecific' => $data
        ]);
    }
}
