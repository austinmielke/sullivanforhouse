@if ($errors->any())
    <div class="my-6">
        <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div class="mb-1 bg-white text-orange font-xl font-bold border-l-4 border-orange py-2 rounded-lg">
                        <p class="pl-2 leading-normal">
                                <i class="fas fa-exclamation-circle text-orange"></i>
                                {{ $error }}
                        </p>
                    </div>
                @endforeach
        </div>
    </div>
@endif