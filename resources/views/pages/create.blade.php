@extends('layouts.app')

@section('title')
    Create New CV
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
            <h1 class="text-2xl pb-5">New Profile</h1>

            @include('partials/errors')
            @include('partials/success')

            <div class="container flex justify-center mx-auto">
                <div class="grid justify-items-center flex-col">
                    <div class="w-full">
                        <form method="post" action="{{ route('profile.store') }}" class="space-y-3">
                            @csrf
                            <div>Name:
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div>Surname:
                                <input type="text" id="surname" name="surname" value="{{ old('surname') }}" required>
                            </div>
                            <div>Phone:
                                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>
                            </div>
                            <div>E-mail:
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="text-center text-sm text-gray-500">Address</div>
                            <div>Street:
                                <input type="text" id="street" name="street" value="{{ old('street') }}" required>
                            </div>
                            <div>House Nr.:
                                <input type="text" id="house_number" name="house_number"
                                       value="{{ old('house_number') }}" required>
                            </div>
                            <div>City:
                                <input type="text" id="city" name="city" value="{{ old('city') }}" required>
                            </div>
                            <div>Country:
                                <input type="text" id="country" name="country" value="{{ old('country') }}" required>
                            </div>
                            <div>Zip Code:
                                <input type="text" id="zip_code" name="zip_code" value="{{ old('zip_code') }}" required>
                            </div>
                            <div class="grid justify-items-center">
                                <button type="submit" onclick="return confirm('Save this profile?')"
                                        class="w-30 bg-green-200 hover:bg-green-600 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                    Save
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
