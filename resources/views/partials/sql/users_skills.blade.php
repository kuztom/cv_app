@if(isset($usersSkills))
<table class="divide-y divide-gray-300 pb-4">
    <thead class="bg-gray-50">
    <tr>
        <th class="px-6 py-2 text-xs text-gray-500" colspan="5"> All Users Skills</th>
    </tr>
    <tr>
        <th class="px-6 py-2 text-xs text-gray-500"> User</th>
        <th class="px-6 py-2 text-xs text-gray-500"> Skill</th>
        <th class="px-6 py-2 text-xs text-gray-500"> Details</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-300">

        @foreach($usersSkills as $key => $item)
            <tr class="whitespace-nowrap">
                <td class="px-6 py-4">{{ $item['name'] }} {{ $item['surname'] }}</td>
                <td class="px-6 py-4">{{ $item['title'] }}</td>
                <td class="px-6 py-4">{{ $item['additional_information'] }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
@endif
