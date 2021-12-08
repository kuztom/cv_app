@if(isset($unique))
<table class="divide-y divide-gray-300 pb-4">
    <thead class="bg-gray-50">
    <tr>
        <th class="px-6 py-2 text-xs text-gray-500"> Schools in Education table</th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-300">

        @foreach($unique as $key => $item)
            <tr class="whitespace-nowrap">
                <td class="px-6 py-4 text-center">{{ $item['school'] }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
@endif
