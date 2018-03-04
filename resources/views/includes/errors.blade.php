@if ($errors->any())
    <div class="my-6">
        <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div class="bg-white text-orange font-xl font-bold border-l-4 border-orange py-2">
                        <p class="pl-2 leading-normal">
                            {{ $error }}
                        </p>
                    </div>
                @endforeach
        </div>
    </div>
@endif