@if (Session::has('success'))
    <div class="flex justify-center alert alert-info text-green-500 text-xl p-6">{{ Session::get('success') }}</div>
@endif
