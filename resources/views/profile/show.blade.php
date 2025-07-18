<x-layouts.auth>
    <div class="max-w-md mx-auto p-4">
        <div class="text-center">
            <img src="/storage/{{ Auth::user()->avatar }}" class="w-24 h-24 rounded-full mx-auto mb-4" />
            <h2 class="text-2xl font-bold">{{ $user->name }}</h2>

            <div class="flex justify-center mt-4 space-x-8">
                <div>
                    <p class="text-gray-500">followers</p>
                    <p>{{ $followers }}</p>
                </div>
                <div>
                    <p class="text-gray-500">following</p>
                    <p>{{ $following }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.auth>
