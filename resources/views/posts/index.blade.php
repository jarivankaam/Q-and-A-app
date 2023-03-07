@extends("layouts.dashboard")

@section("content")

    <h1 class="text-4xl font-bold mx-5 my-5">My Posts</h1>

    <table class="mt-8 mr-auto ml-auto w-3/4 divide-y divide-gray-200">
        <thead class="bg-darkblue-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
        </tr>
        </thead>
        <tbody class=" divide-y divide-gray-200">
        @foreach($posts as $post)
            <tr class="text-left">
                <td class="px-6 py-4 whitespace-nowrap ">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-900">{{$post->message}}</a>
                </td>
                @foreach($users as $user)
                    @if($post->user_id == $user->id)
                        <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                    @else
                        <td class="px-6 py-4 whitespace-nowrap">{{$post->user_id}}</td>
                    @endif
                @endforeach


            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
