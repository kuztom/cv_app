@extends('layouts.app')

@section('title')
    CV Manager
@stop

@section('content')
    <div class="bg-gray-100">
        <div class="grid justify-items-center bg-gray-100 pt-16 px-6">
            <h1 class="text-4xl pb-5">CV Manager <small>(v1.0)</small></h1>

            <span class="p-4 items-start">
                <a href="{{ route('profile.create') }}">
                <button type="button" name="new"
                        class="w-30 bg-blue-200 hover:bg-blue-600 text-sm text-grey-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    New CV
                </button>
                    </a>
            </span>

            @include('partials/success')
            <div class="container flex justify-center mx-auto">
                <div class="flex flex-col">
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 ">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-500"> ID</th>
                                    <th class="px-6 py-2 text-xs text-gray-500"> Name</th>
                                    <th class="px-6 py-2 text-xs text-gray-500"> Surname</th>
                                    <th class="px-6 py-2 text-xs text-gray-500"> Phone</th>
                                    <th class="px-6 py-2 text-xs text-gray-500"> E-mail</th>
                                    <th class="px-6 py-2 text-xs text-gray-500"> Print</th>
                                    <th class="px-6 py-2 text-xs text-gray-500"> Edit</th>
                                    <th class="px-6 py-2 text-xs text-gray-500"> Delete</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">

                                @if(!empty($data))
                                    @foreach($data as $profile)
                                        <tr class="whitespace-nowrap">
                                            <td class="px-6 py-4 text-sm text-gray-500">{{$profile->id}}</td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    {{$profile->name}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    {{$profile->surname}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-500">{{$profile->phone}}</div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-500">{{$profile->email}}</div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <form method="get" action="{{ route('print', [$profile->id]) }}">
                                                    <button type="submit" name="edit" value="{{$profile->id}}"
                                                            class="w-full bg-blue-200 hover:bg-blue-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                        PRINT
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="px-6 py-4">
                                                <form method="get" action="{{ route('profile.edit', [$profile->id]) }}">
                                                    <button type="submit" name="edit" value="{{$profile->id}}"
                                                            class="w-full bg-green-200 hover:bg-green-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                        EDIT
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="px-6 py-4">
                                                <form method="post" action="{{ route('profile.delete', [$profile->id]) }}">
                                                    @csrf
                                                    <button type="submit" name="delete" value="{{$profile->id}}" onclick="return confirm('Delete this profile?')"
                                                            class="w-full bg-red-300 hover:bg-red-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                        DELETE
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="p-4 text-sm text-center text-gray-500" colspan="7">No data in
                                            database
                                        </td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                            <div class="p-4">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
