<x-app-layout>
    <x-slot name="header">
        @livewire('hero-component')
    </x-slot>

    <x-slot name="slot">
        <div class="mt-8 mr-auto ml-auto w-3/4 flex justify-center items-center flex-col">
            <a href="{{ route('posts.create') }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200">
                <i class="fa-solid fa-plus"></i>
                New Post
            </a>
        </div>

        @if(empty($posts))
            <p>Here posts will be ar....</p>
        @endif

        @if(!empty($posts))

            @foreach ($posts as $post)
            <div class="flex flex-col justify-center items-center mt-10">
                <div class="w-1/2">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <a href=""><p class="text-sm">{{ $post->message }}</p></a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </x-slot>
</x-app-layout>
