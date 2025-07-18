<x-layouts.auth>
    <form method="post" class="space-y-3 ">
        @csrf
        <x-input id="email" label="Email" icon="icon-[tabler--mail]" type="email" />
        <x-input id="password" label="Password" icon="icon-[tabler--lock]" type="password" />

        <button class="btn btn-soft btn-primary w-full mt-8">Log in</button>
        <span>
            Don`t have an account?
            <a href="/register" class="link link-animated">Sign up</a>
        </span>
</form>
</x-layouts.auth>