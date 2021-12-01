@extends('layouts.app')

@section('title')
    Manage CV Data
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
            <h1 class="text-2xl pb-5">Manage {{$profile->name}} {{$profile->surname}} Data</h1>
            <div>
                <form method="get" action="{{ route('education.create', [$profile->id]) }}">
                    <input hidden name="userId" value="{{$profile->id}}">
                    <button type="submit" name="education" value="{{$profile->id}}"
                            class="w-full bg-green-200 hover:bg-green-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        Add Education
                    </button>
                </form>
                <form method="get" action="{{ route('work.create', [$profile->id]) }}">
                    <input hidden name="userId" value="{{$profile->id}}">
                    <button type="submit" name="work" value="{{$profile->id}}"
                            class="w-full bg-green-200 hover:bg-green-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        Add Work Experience
                    </button>
                </form>
                <form method="get" action="{{ route('skill.create', [$profile->id]) }}">
                    <input hidden name="userId" value="{{$profile->id}}">
                    <button type="submit" name="skill" value="{{$profile->id}}"
                            class="w-full bg-green-200 hover:bg-green-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        Add Skill
                    </button>
                </form>
            </div>
            <div class="container flex justify-center mx-auto">
                <div class="grid justify-items-center flex-col">
                    @include('partials/errors')
                    @include('partials/success')
                    <div class="w-full">
                        <form method="post" action="{{ route('profile.update', [$profile->id]) }}" class="space-y-3">
                            @csrf
                            <div>Name:
                                <input type="text" id="name" name="name" value="{{ $profile->name }}">
                            </div>
                            <div>Surname:
                                <input type="text" id="surname" name="surname" value="{{ $profile->surname }}">
                            </div>
                            <div>Phone:
                                <input type="text" id="phone" name="phone" value="{{ $profile->phone }}">
                            </div>
                            <div>E-mail:
                                <input type="text" id="email" name="email" value="{{ $profile->email }}">
                            </div>
                            <div class="text-center text-sm text-gray-500">Address</div>
                            <div>Street:
                                <input type="text" id="street" name="street" value="{{ $profile->street }}">
                            </div>
                            <div>House Nr.:
                                <input type="text" id="house_number" name="house_number"
                                       value="{{ $profile->house_number }}">
                            </div>
                            <div>City:
                                <input type="text" id="city" name="city" value="{{ $profile->city }}">
                            </div>
                            <div>Country:
                                <input type="text" id="country" name="country" value="{{ $profile->country }}">
                            </div>
                            <div>Zip Code:
                                <input type="text" id="zip_code" name="zip_code" value="{{ $profile->zip_code }}">
                            </div>
                            <div class="grid justify-items-center">
                                <button type="submit" onclick="return confirm('Save changes?')"
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


    <div class="p-6">
        @include('partials/education')
    </div>
    <div class="p-6">
        @include('partials/work')
    </div>
    <div class="p-6">
        @include('partials/skills')
    </div>

@stop
