@if(isset($countSpecific))
<table class="divide-y divide-gray-300 pb-4">
    <thead class="bg-gray-50">
    <tr>
        <th class="px-6 py-2 text-xs text-gray-500" colspan="2"> {{$school}} records in database</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-300">
            <tr class="whitespace-nowrap">
                <td class="px-6 py-4">{{ $school }}</td>
                <td class="px-6 py-4">{{ $countSpecific }}</td>
            </tr>

    </tbody>
</table>
@endif
