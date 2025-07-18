<x-layouts.auth>
    <form method="post" enctype="multipart/form-data" class="space-y-3">
        @csrf
        <div class="max-w-sm input-floating">
            <input type="file" required accept="image/*" class="input" id="avatar" name="avatar" />
            <label class="input-floating-label" for="avatar">Profile Picture</label>
            @error('avatar')
                <div class='text-error helper-text ps-3 mb-2'>
                    {{ $message }}
                </div>
            @enderror
        </div>
        <x-input id="name" minLength="3" label="Username" icon="icon-[tabler--user]" />
        <x-input id="email" label="Email" icon="icon-[tabler--mail]" type="email" />
        <x-input id="password" minLength="8" label="Password" icon="icon-[tabler--lock]" type="password" />
        <x-input id="password_confirmation" minLength="8" label="Confirm password" icon="icon-[tabler--lock-check]"
            type="password" />

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                @endforeach
            </ul>
        @endif

        <button class="btn btn-soft btn-primary w-full mt-8">Sign up</button>
        <span>
            Already have an account?
            <a href="/login" class="link link-animated">Log in</a>
        </span>
    </form>
</x-layouts.auth>