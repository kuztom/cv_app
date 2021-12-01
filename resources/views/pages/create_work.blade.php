@extends('layouts.app')

@section('title')
    New Work Experience
@stop

@section('content')
    <div class="bg-gray-100">
        <div class="grid justify-items-center bg-gray-100 pt-16 px-6">
            <h1 class="text-4xl pb-5">CV Manager <small>(v1.0)</small></h1>
            <div class="p-6">
                <a href="/profile/edit/{{$userId}}">
                    <button type="submit"
                            class="w-30 bg-grey-200 hover:bg-blue-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        <- Back
                    </button>
                </a>
            </div>
            <h1 class="text-2xl pb-5">New Work Experience</h1>

            @include('partials/errors')
            @include('partials/success')

            <div class="container flex justify-center mx-auto">
                <div class="grid justify-items-center flex-col">
                    <div class="w-full">
                        <form method="post" action="{{ route('work.store') }}" class="space-y-3">
                            @csrf
                            <input hidden name="userId" value="{{$userId}}">
                            <div>Company:
                                <input type="text" id="company" name="company" value="{{ old('company') }}" required>
                            </div>
                            <div>Position:
                                <input type="text" id="position" name="position" value="{{ old('position') }}" required>
                            </div>
                            <div>Duties:
                                <input type="text" id="additional_information" name="additional_information"
                                       value="{{ old('additional_information') }}" >
                            </div>
                            <div>Start date:
                                <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}" required>
                            </div>
                            <div>End date:
                                <input type="date" id="end_date" name="end_date" value="{{ old('end_date') }}" >
                            </div>
                            <div class="grid justify-items-center">
                            <button type="submit" onclick="return confirm('Save this work experience?')"
                                    class="w-30 bg-green-200 hover:bg-green-600 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                Save Work Experience
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
