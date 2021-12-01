<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileFormRequest;
use App\Models\Education;
use App\Models\Skill;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Session;

class ProfilesController extends Controller
{
    public function create()
    {
        return view('pages.create');
    }

    public function store(ProfileFormRequest $request)
    {
        $profile = new User([
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email,
            'street' => $request->street,
            'house_number' => $request->house_number,
            'city' => $request->city,
            'country' => $request->country,
            'zip_code' => $request->zip_code,
        ]);

        $profile->save();

        Session::flash('success', 'Profile successfully saved.');
        return back();
    }

    public function edit(int $id)
    {
        $profile = User::find($id);
        $education = Education::where('user_id', $id)->get();
        $workExperience = WorkExperience::where('user_id', $id)->get();
        $skills = Skill::where('user_id', $id)->get();

        return view('pages.edit', [
            'profile' => $profile,
            'education' => $education,
            'workExperience' => $workExperience,
            'skills' => $skills
        ]);
    }

    public function update(ProfileFormRequest $request, int $id)
    {
        User::whereId($id)->update($request->except(['_token']));

        Session::flash('success', 'Profile successfully edited.');
        return back();
    }

    public function delete(int $id)
    {
        User::find($id)->delete();
        Skill::where('user_id', $id)->delete();
        Education::where('user_id', $id)->delete();
        WorkExperience::where('user_id', $id)->delete();

        Session::flash('success', 'Selected profile and all data was deleted.');
        return back();
    }
}
