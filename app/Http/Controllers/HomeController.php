<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Skill;
use App\Models\User;
use App\Models\WorkExperience;

class HomeController extends Controller
{
    public function index()
    {
        $data = User::paginate(5);

        return view('pages.home', [
            'data' => $data
        ]);
    }

    public function print(int $id)
    {
        $profile = User::find($id);
        $education = Education::where('user_id', $id)->get();
        $workExperience = WorkExperience::where('user_id', $id)->get();
        $skills = Skill::where('user_id', $id)->get();

        return view('pages.print', [
            'profile' => $profile,
            'education' => $education,
            'workExperience' => $workExperience,
            'skills' => $skills
        ]);
    }
}
