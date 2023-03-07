@extends("layouts.dashboard")

@section("content")


    <div class="flex flex-col justify-center items-center mt-10">
        <div class="w-1/2 my-1">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900 dark:text-gray-100 text-left">
                    <p class="text-xl">{{ $post->message }}</p>
                    <div class="flex items-center mt-6">
                        @if(!empty($post->user->profile_picture_url) )
                            <img class="w-10 h-10 rounded-full mr-4" src="{{ $post->user->profile_picture_url }}" alt="Profile picture">
                        @else
                            <img class="w-10 h-10 rounded-full mr-4" src="{{ asset('img/uptree_profilepic_placeholder.png') }}" alt="Profile picture">
                        @endif

                        <div>
                            <p class="font-medium text-gray-900 dark:text-gray-100">{{ $post->user->name }}</p>
                        </div>
                        <span class="ml-auto text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
