@extends('layouts.app')

@section('title')
    Edit Skill
@stop

@section('content')
    <div class="bg-gray-100">
        <div class="grid justify-items-center bg-gray-100 pt-16 px-6">
            <h1 class="text-4xl pb-5">CV Manager <small>(v1.0)</small></h1>
            <div class="p-6">
                <a href="/">
                    <button type="submit"
                            class="w-30 bg-grey-200 hover:bg-blue-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        <- Back to list
                    </button>
                </a>
            </div>
            <h1 class="text-2xl pb-5">Edit Skill</h1>

            @include('partials/errors')
            @include('partials/success')

            <div class="container flex justify-center mx-auto">
                <div class="grid justify-items-center flex-col">
                    <div class="w-full">
                        <form method="post" action="{{ route('skill.update', [$skill->id]) }}" class="space-y-3">
                            @csrf
                            <input hidden name="skillId" value="{{$skill->id}}">
                            <div>Title:
                                <input type="text" id="title" name="title" value="{{$skill->title}}" required>
                            </div>
                            <div>Additional information:
                                <input type="text" id="additional_information" name="additional_information"
                                       value="{{$skill->additional_information}}" required>
                            </div>
                            <div class="grid justify-items-center">
                            <button type="submit" onclick="return confirm('Save this skill?')"
                                    class="w-30 bg-green-200 hover:bg-green-600 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                Save Changes
                            </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@stop
