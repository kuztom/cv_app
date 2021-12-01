@if(!$errors->isEmpty())
    @foreach($errors->all() as $error)
        <div class="flex justify-center alert alert-info text-red-600 text-xl">
            {{ $error }}
        </div>
    @endforeach
@endif
