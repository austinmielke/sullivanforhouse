@if (session('success'))
    <div class="bg-white text-orange py-4">
        <p class="leading-normal text-center text-2xl font-bold">
            {{ session('success') }}
        </p>
    </div>
@endif