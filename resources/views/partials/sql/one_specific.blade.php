@if(isset($oneSpecific))
<table class="divide-y divide-gray-300 pb-4">
    <thead class="bg-gray-50">
    <tr>
        <th class="px-6 py-2 text-xs text-gray-500" colspan="5"> RTU Data in table</th>
    </tr>
    <tr>
        <th class="px-6 py-2 text-xs text-gray-500"> School</th>
        <th class="px-6 py-2 text-xs text-gray-500"> User ID</th>
        <th class="px-6 py-2 text-xs text-gray-500"> Degree</th>
        <th class="px-6 py-2 text-xs text-gray-500"> Start Date</th>
        <th class="px-6 py-2 text-xs text-gray-500"> End Date</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-300">

        @foreach($oneSpecific as $key => $item)
            <tr class="whitespace-nowrap">
                <td class="px-6 py-4">{{ $item['school'] }}</td>
                <td class="px-6 py-4">{{ $item['user_id'] }}</td>
                <td class="px-6 py-4">{{ $item['degree'] }}</td>
                <td class="px-6 py-4">{{ $item['start_date'] }}</td>
                <td class="px-6 py-4">{{ $item['end_date'] }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
@endif
