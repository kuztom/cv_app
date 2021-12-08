@extends('layouts.app')

@section('title')
    SQL Data Search
@stop

@section('content')
    <div class="bg-gray-100">
        <div class="grid justify-items-center bg-gray-100 pt-16 px-6">
            <h1 class="text-4xl pb-5">SQL Data Search <small>(Education table)</small></h1>
            <span class="p-4 items-start">
               <a href="/">
                    <button type="submit"
                            class="w-30 bg-grey-200 hover:bg-blue-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        <- Back to list
                    </button>
                </a>
            </span>

            <form method="get" action="{{ route('search.all') }}">
                <button type="submit"
                        class="w-full bg-blue-200 hover:bg-blue-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    All Data
                </button>
            </form>

            <form method="get" action="{{ route('search.unique') }}">
                <button type="submit"
                        class="w-full bg-blue-200 hover:bg-blue-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    All Schools
                </button>
            </form>

            <form method="get" action="{{ route('search.oneSpecific') }}">
                <button type="submit"
                        class="w-full bg-blue-200 hover:bg-blue-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    RTU Data
                </button>
            </form>

            <form method="get" action="{{ route('search.countSpecific') }}">
                <button type="submit"
                        class="w-full bg-blue-200 hover:bg-blue-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Count LLU Records
                </button>
            </form>

            <form method="get" action="{{ route('search.join') }}">
                <button type="submit"
                        class="w-full bg-blue-200 hover:bg-blue-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    User Education and Skills
                </button>
            </form>

            @include('partials/success')
            <div class="container flex justify-center mx-auto">
                <div class="flex flex-col">
                    <div class="w-full p-4">
                        <div class="border-b border-gray-200 shadow ">

                                @include('partials/sql/all')
                                @include('partials/sql/unique')
                                @include('partials/sql/one_specific')
                                @include('partials/sql/count_specific')
                                @include('partials/sql/join')
                                @include('partials/sql/users_skills')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
