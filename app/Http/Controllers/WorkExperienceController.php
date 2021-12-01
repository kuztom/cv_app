<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperienceFormRequest;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WorkExperienceController extends Controller
{
    public function create(Request $request)
    {
        $userId = $request->input('userId');

        return view('pages.create_work', [
            'userId' => $userId
        ]);
    }

    public function store(Request $user, WorkExperienceFormRequest $request)
    {

        $userId = $user->input('userId');
        $user = User::find($userId);

        $work = new WorkExperience([
            'company' => $request->company,
            'position' => $request->position,
            'additional_information' => $request->additional_information,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        $work->user()->associate($user);
        $work->save();

        Session::flash('success', 'Work experience successfully added.');
        return back();
    }

    public function edit(int $id)
    {
        $work = WorkExperience::find($id);

        return view('pages.edit_work', [
            'work' => $work
        ]);
    }

    public function update(WorkExperienceFormRequest $request, int $id)
    {
        WorkExperience::find($id)->update($request->except(['_token', 'user_id']));

        Session::flash('success', 'Work experience successfully edited.');
        return back();
    }

    public function delete(int $id)
    {
        WorkExperience::find($id)->delete();

        Session::flash('success', 'Work experience data deleted successfully.');
        return back();
    }
}
