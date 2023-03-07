<x-app-layout>
{{--    <x-slot name="header">--}}
{{--        @livewire('hero-component')--}}
{{--    </x-slot>--}}

    <x-slot name="slot">

        @if (Auth::check())

            <form method="POST" action="{{ route('posts.store') }}" class="w-1/2 mx-auto pt-4 rounded-lg text-left">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <div class="mb-4">
                    <label class="block font-bold mb-2" for="message">
                        Make a post
                    </label>
                    <div class="flex justify-center items-center flex-row ">
                        @if(!empty($post->user->profile_picture_url) )
                            <img class="w-10 h-10 rounded-full mr-7" src="{{ $post->user->profile_picture_url }}" alt="Profile picture">
                        @else
                            <img class="w-10 h-10 rounded-full mr-7" src="{{ asset('img/uptree_profilepic_placeholder.png') }}" alt="Profile picture">
                        @endif
                        <textarea
                            class="block resize-none mt-5 w-full px-4 py-2 leading-tight bg-transparent border border-gray-200 rounded-lg focus:border-gray-500
                        focus:outline-none @error('message') border-red-500 @enderror"
                            id="message"
                            name="message"
                            rows="3"
                            placeholder="Enter your message here"
                            required
                        ></textarea>
                    </div>

                    @error('message')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-end">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-[35px] hover:bg-blue-700 transition duration-200" type="submit">
                        Save
                    </button>
                </div>
            </form>


        @else
            <div class="mt-8 mr-auto ml-auto w-3/4 flex justify-center items-center flex-col ">
                <p class="text-small text-gray-500 dark:text-gray-400 mb-4">Log in or Sign in to make posts:</p>
                <a href="{{ route('login') }}" class="disabled:opacity-50 inline-block px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200" disabled tabindex="-1">
                    <i class="fa-solid fa-user"></i>
                    Log in/Sign in
                </a>
            </div>
        @endif



        @if(empty($posts))
            <p>Here posts will be ar....</p>
        @endif

        @if(!empty($posts))


            <div class="flex flex-col justify-center items-center mt-8">
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
