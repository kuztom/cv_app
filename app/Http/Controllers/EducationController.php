<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationFormRequest;
use App\Models\Education;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EducationController extends Controller
{
    public function create(Request $request)
    {
        $userId = $request->input('userId');

        return view('pages.create_education', [
            'userId' => $userId
        ]);
    }

    public function store(Request $user, EducationFormRequest $request)
    {

        $userId = $user->input('userId');
        $user = User::find($userId);

        $education = new Education([
            'school' => $request->school,
            'degree' => $request->degree,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        $education->user()->associate($user);
        $education->save();

        Session::flash('success', 'Education successfully added.');
        return back();
    }

    public function edit(int $id)
    {
        $education = Education::find($id);

        return view('pages.edit_education', [
            'education' => $education
        ]);
    }

    public function update(EducationFormRequest $request, int $id)
    {
        Education::find($id)->update($request->except(['_token', 'user_id']));

        Session::flash('success', 'Education successfully edited.');
        return back();
    }

    public function delete(int $id)
    {
        Education::find($id)->delete();

        Session::flash('success', 'Education data deleted successfully.');
        return back();
    }
}
