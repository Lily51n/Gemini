<x-layouts.default>
  <div class="my-auto card px-8 py-16 max-w-84 self-center">
     <a class="link text-base-content link-neutral text-3xl font-bold no-underline flex items-end justify-center text-center mb-16"
            href="/">
      <div class="flex flex-col justify-center items-center">
        <span class="icon-[tabler--zodiac-gemini] size-20 text-purple-200"></span>
      <h1 class="font-bold text-4xl"> 
          Gemini
      </h1>
    </div>
    </a>
    <div>
      {{ $slot }}
    </div>
  </div>
</x-layouts.default>