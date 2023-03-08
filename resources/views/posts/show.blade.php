@extends("layouts.dashboard")

@section("content")


    <div class="flex flex-col justify-center items-center mt-10">
        <div class="w-1/2 my-1">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-7 text-gray-900 dark:text-gray-100 text-left">
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


            <form method="POST" action="{{ route('comments.store') }}" id="my-form" class="hidden w-full mx-auto pt-4 rounded-lg text-left">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div>
                    <label class="block font-bold mb-2" for="message">
                        Add Comment
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
                    <button class="px-4 py-2 bg-blue-600 my-5 text-white rounded-[35px] hover:bg-blue-700 transition duration-200" type="submit">
                        <i class="fa-solid fa-reply mr-2"></i>Reply
                    </button>
                </div>
            </form>
            <div class="flex items-center justify-end">
                <button id="show-form" class="px-4 py-2 bg-blue-600 my-5 text-white rounded-[35px] hover:bg-blue-700 transition duration-200" type="submit">
                    <i class="fa-solid fa-reply mr-2"></i>Reply
                </button>
            </div>
            @foreach($comments as $comment)
                @if($post->id == $comment->post_id)
                    <div class="bg-white dark:bg-gray-800 @if($comment->user_id == Auth::id()) ml-20 dark:bg-gray-600  @endif  overflow-hidden shadow-sm sm:rounded-lg ml-10 mb-5">
                        <div class="p-7 text-gray-900 dark:text-gray-100 text-left">
                            <p class="text-xl">{{ $comment->content }}</p>
                            <div class="flex items-center mt-6">
                                @if(!empty($comment->user->profile_picture_url) )
                                    <img class="w-10 h-10 rounded-full mr-4" src="{{ $comment->user->profile_picture_url }}" alt="Profile picture">
                                @else
                                    <img class="w-10 h-10 rounded-full mr-4" src="{{ asset('img/uptree_profilepic_placeholder.png') }}" alt="Profile picture">
                                @endif

                                <div>
                                    <p class="font-medium text-gray-900 dark:text-gray-100">{{ $comment->user->name }}</p>
                                </div>
                                <span class="ml-auto text-gray-500 dark:text-gray-400">{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach






        </div>
    </div>

    <script>
        const showFormButton = document.querySelector('#show-form');
        const form = document.querySelector('#my-form');

        showFormButton.addEventListener('click', () => {
            form.classList.toggle('hidden');
            showFormButton.classList.toggle('hidden');
        });
    </script>




@endsection





