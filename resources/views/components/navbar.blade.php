<div class="px-12 py-6 flex gap-4 justify-center ">
    <x-link href="/" :active="request()->is('/')">Home</x-link>
    <x-link href="/about" :active="request()->is('about')">About</x-link>
</div>