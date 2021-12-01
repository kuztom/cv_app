<div class="container flex justify-center mx-auto">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table class="divide-y divide-gray-300 ">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500" colspan="7"> Work Experience</th>
                    </tr>
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500" > Company</th>
                        <th class="px-6 py-2 text-xs text-gray-500" > Position</th>
                        <th class="px-6 py-2 text-xs text-gray-500" > Details</th>
                        <th class="px-6 py-2 text-xs text-gray-500" > Start date</th>
                        <th class="px-6 py-2 text-xs text-gray-500" > End date</th>
                        <th class="px-6 py-2 text-xs text-gray-500" > Edit</th>
                        <th class="px-6 py-2 text-xs text-gray-500" > Delete</th>
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
                                <td class="px-6 py-4">
                                    <form method="get" action="{{ route('work.edit', [$work->id]) }}">
                                        <button type="submit" name="edit" value="{{$work->id}}"
                                                class="w-full bg-green-200 hover:bg-green-500 text-sm text-gray-800 hover:text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                            EDIT
                                        </button>
                                    </form>

                                </td>
                                <td class="px-6 py-4">
                                    <form method="post" action="{{ route('work.delete', [$work->id]) }}">
                                        @csrf
                                        <button type="submit" name="edit" value="{{$work->id}}" onclick="return confirm('Delete this work experience data?')"
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
                                No work experience to show
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
