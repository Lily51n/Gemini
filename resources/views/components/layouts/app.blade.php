<x-layouts.default>
  <nav class="navbar bg-base-100 rounded-box gap-4 shadow-base-300/20 shadow-sm border-b-2 sticky top-0 z-50">
    <div class="navbar-start items-center ">
      <span class="icon-[tabler--zodiac-gemini] size-8"></span>
      <a class="link text-base-content link-neutral text-xl font-bold no-underline" href="/">
        Gemini
      </a>
    </div>
    <div class="navbar-end flex items-center gap-4">
      <button class="btn btn-sm btn-text btn-circle size-8.5 md:hidden">
        <span class="icon-[tabler--search] size-5.5 "></span>
      </button>
      <div class="input max-md:hidden rounded-full max-w-56">
        <span class="icon-[tabler--search] text-base-content/80 my-auto me-3 size-5 shrink-0"></span>
        <label class="sr-only" for="searchInput">Full Name</label>
        <input type="search" class="grow" placeholder="Search" id="searchInput" />
      </div>
      <button class="btn btn-soft btn-text">
        <span class="icon-[tabler--moon] size-5"></span>
      </button>
      @if (Auth::check())
      <div class="dropdown relative inline-flex [--auto-close:inside] [--offset:8] [--placement:bottom-end]">
      <button id="dropdown-scrollable" type="button" class="dropdown-toggle flex items-center" aria-haspopup="menu"
        aria-expanded="false" aria-label="Dropdown">
        <div class="avatar">
        <div class="size-9.5 rounded-full">
          <img src="/storage/{{ Auth::user()->avatar }}" alt="avatar 1" />
        </div>
        </div>
      </button>
      <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu" aria-orientation="vertical"
        aria-labelledby="dropdown-avatar">

        <li>
        <a class="dropdown-item" href="{{ route('profile.show', Auth::user()->id) }}">
          <span class="icon-[tabler--user]"></span>
          My Profile
        </a>
        </li>
        <li class="dropdown-footer gap-2">
        <form method="post" action="{{ route('logout') }}" class="w-full">
          @csrf
          <button type="submit" class="btn btn-error btn-soft btn-block">
          <span class="icon-[tabler--logout]"></span>
          Sign out
          </button>
        </form>
        </li>
      </ul>
      </div>
    @else
      <a href="{{ route('login') }}">
      <button class="btn btn-soft btn-text">
        <span class="icon-[tabler--login] size-5"></span>
      </button>
      </a>
    @endif


    </div>
  </nav>

  <div class="mt-8 flex-1">
    {{ $slot }}
  </div>

  <form method="post" action="{{ route('tweet.create') }}"
    class="border border-black border-t-2 border-t-black rounded-field sticky bottom-4 drop-shadow-2xl bg-base-100">
    @csrf
    <input type="hidden" name="parent_tweet_id" value="{{ request()->tweet?->id }}" />
    <div class="textarea-floating">
      <textarea required class="textarea border-0 resize-none" placeholder="Share your thoughts" id="content" Name="content"></textarea>
      <label class="textarea-floating-label" for="textareaFloating">Write a Tweet</label>
    </div>

    <div class="p-2 pt-0">
      @error('content')
      <div>
      {{ $message }}
      </div>
    @enderror

      <button type="submit" class="btn btn-primary btn-square">
        <span class="icon-[tabler--send]"></span>
      </button>
  </form>
</x-layouts.default>