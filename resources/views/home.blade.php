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


            <div class="flex flex-col justify-center items-center mt-10">
                @foreach ($posts as $post)
                <div class="w-1/2 my-1">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-left">
                            <a href="{{ route('posts.show', $post->id) }}"><p class="text-xl">{{ $post->message }}</p></a>

                            <div class="flex flex-row items-center mt-5">
                                @if(!empty($post->user->profile_picture_url) )
                                    <img class="w-10 h-10 rounded-full mr-4" src="{{ $post->user->profile_picture_url }}" alt="Profile picture">
                                @else
                                    <img class="w-10 h-10 rounded-full mr-4" src="{{ asset('img/uptree_profilepic_placeholder.png') }}" alt="Profile picture">
                                @endif
                                <p class="font-medium text-gray-900 dark:text-gray-100"> {{ $post->user->name }} -
                                    <span class="ml-auto text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</span>
                                </p>
                            </div>

                        </div>

                    </div>

                </div>
            @endforeach
            </div>
        @endif
    </x-slot>
</x-app-layout>
