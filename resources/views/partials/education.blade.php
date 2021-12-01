<div class="container flex justify-center mx-auto">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table class="divide-y divide-gray-300 ">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500" colspan="7"> Education</th>
                    </tr>
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500" > School</th>
                        <th class="px-6 py-2 text-xs text-gray-500" > Degree</th>
                        <th class="px-6 py-2 text-xs text-gray-500" > Start date</th>
                        <th class="px-6 py-2 text-xs text-gray-500" > End date</th>
                        <th class="px-6 py-2 text-xs text-gray-500" > Edit</th>
                        <th class="px-6 py-2 text-xs text-gray-500" > Delete</th>
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
                                <td class="px-6 py-4">
                                    <form method="get" action="{{ route('education.edit', [$school->id]) }}">
                                        <button type="submit" name="edit" value="{{$school->id}}"
                                                class="w-full bg-green-200 hover:bg-green-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                            EDIT
                                        </button>
                                    </form>

                                </td>
                                <td class="px-6 py-4">
                                    <form method="post" action="{{ route('education.delete', [$school->id]) }}">
                                        @csrf
                                        <button type="submit" name="edit" value="{{$school->id}}" onclick="return confirm('Delete this education data?')"
                                                class="w-full bg-red-300 hover:bg-red-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                            DELETE
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="p-4 text-sm text-center text-gray-500" colspan="7">
                                No education to show
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
