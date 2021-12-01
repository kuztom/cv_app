<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillFormRequest;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SkillsController extends Controller
{
    public function create(Request $request)
    {
        $userId = $request->input('userId');

        return view('pages.create_skill', [
            'userId' => $userId
        ]);
    }

    public function store(Request $user, SkillFormRequest $request)
    {

        $userId = $user->input('userId');
        $user = User::find($userId);

        $skill = new Skill([
            'title' => $request->title,
            'additional_information' => $request->additional_information
        ]);

        $skill->user()->associate($user);
        $skill->save();

        Session::flash('success', 'Skill successfully added.');
        return back();
    }

    public function edit(int $id)
    {
        $skill = Skill::find($id);

        return view('pages.edit_skill', [
            'skill' => $skill
        ]);
    }

    public function update(SkillFormRequest $request, int $id)
    {
        Skill::find($id)->update($request->except(['_token', 'user_id']));

        Session::flash('success', 'Skill successfully edited.');
        return back();
    }

    public function delete(int $id)
    {
        Skill::find($id)->delete();

        Session::flash('success', 'Skill data deleted successfully.');
        return back();
    }
}
