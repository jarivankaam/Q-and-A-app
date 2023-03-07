@extends("layouts.dashboard")

@section("content")

    <h1 class="text-4xl font-bold mx-5 my-5">My Posts</h1>

    <table class="mt-8 mr-auto ml-auto w-3/4 divide-y divide-gray-200">
        <thead class="bg-darkblue-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Message') }}</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Message created') }}</th>
        </tr>
        </thead>
        <tbody class=" divide-y divide-gray-200">
        @foreach($posts as $post)
            <tr class="text-left">
                <!--- check if the logged in user has the same userid as the post --->
                @if(Auth::id() == $post->user_id)
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-white-900">{{$post->message}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-white-900">{{$post->created_at->diffForHumans()}}</div>
                    </td>
                @endif

            </tr>
        @endforeach
        </tbody>
    </table>



@endsection

