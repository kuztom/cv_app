@extends('layouts.preview')

@section('title')
    CV Print Preview
@stop

@section('content')
    <div>
        <div class="grid justify-items-center pt-16 px-6">
            <h1 class="text-3xl pb-5 text-gray-500 font-bold">Curriculum Vitae</h1>
            <h1 class="px-6 py-2 text-2xl text-gray-500 font-bold">{{$profile->name}} {{$profile->surname}} </h1>
            <h1 class="text-sm">Phone: {{ $profile->phone }}</h1>
            <h1 class="text-sm">E-mail: {{ $profile->email }}</h1>
            <h1 class="text-sm">Address: {{ $profile->street }} {{ $profile->house_number }},
                {{ $profile->city }}, {{ $profile->country }}, {{ $profile->zip_code }}</h1>

{{--            Education table             --}}
            <div class="pt-6">
            <table class="divide-y divide-gray-300">
                <thead>
                <tr>
                    <th class="px-6 py-2 text-2xl text-gray-500" colspan="7"> Education</th>
                </tr>
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-500" > School</th>
                    <th class="px-6 py-2 text-xs text-gray-500" > Degree</th>
                    <th class="px-6 py-2 text-xs text-gray-500" > Start date</th>
                    <th class="px-6 py-2 text-xs text-gray-500" > End date</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-300">

                @if(!$education->isEmpty())
                    @foreach($education as $school)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-gray-900">{{$school->school}}</td>
                            <td class="px-6 py-4 text-gray-900">{{$school->degree}}</td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{$school->start_date}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{$school->end_date}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="p-4 text-sm text-center text-gray-500" colspan="7">
                            No education in record
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
            </div>

{{--            Work Experience Table           --}}
            <div class="pt-6">
            <table class="divide-y divide-gray-300 ">
                <thead>
                <tr>
                    <th class="px-6 py-2 text-2xl text-gray-500" colspan="7"> Work Experience</th>
                </tr>
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-500" > Company</th>
                    <th class="px-6 py-2 text-xs text-gray-500" > Position</th>
                    <th class="px-6 py-2 text-xs text-gray-500" > Details</th>
                    <th class="px-6 py-2 text-xs text-gray-500" > Start date</th>
                    <th class="px-6 py-2 text-xs text-gray-500" > End date</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-300">

                @if(!$workExperience->isEmpty())
                    @foreach($workExperience as $work)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-gray-900">{{$work->company}}</td>
                            <td class="px-6 py-4 text-gray-900">{{$work->position}}</td>
                            <td class="px-6 py-4 text-gray-900">{{$work->additional_information}}</td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{$work->start_date}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{$work->end_date}}
                                </div>
                            </td>


                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="p-4 text-sm text-center text-gray-500" colspan="7">
                            No work experience in record
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
            </div>
{{--            Skills Table            --}}

            <div class="pt-6">
            <table class="divide-y divide-gray-300 ">
                <thead>
                <tr>
                    <th class="px-6 py-2 text-2xl text-gray-500" colspan="7"> Skills and other data</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-300">

                @if(!$skills->isEmpty())
                    @foreach($skills as $skill)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-900">{{$skill->title}}</td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">
                                    {{$skill->additional_information}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="p-4 text-sm text-center text-gray-500" colspan="7">
                            No skills to show
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>

        </div>

@stop
