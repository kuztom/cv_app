@if(isset($join))

        @foreach($join as $key => $item)
            <div class="p-4">
            <p>User with id {{$item['user_id']}} have received {{$item['degree']}} degree in {{$item['school']}}.</p>
                <p>Skill - {{$item['title']}} - {{$item['additional_information']}}</p>
            </div>
        @endforeach

@endif
