<x-app-layout>
    <x-slot name="header">
        @livewire('hero-component')
    </x-slot>

    <x-slot name="slot">

        @if(empty($posts))
            <p>Here posts will be ar....</p>
        @endif

        @foreach ($posts as $post)
            <div class="flex flex-col justify-center items-center mt-10" >
                <div class="w-1/2">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
                            <p class="text-sm">{{ $post->contents }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </x-slot>
</x-app-layout>
