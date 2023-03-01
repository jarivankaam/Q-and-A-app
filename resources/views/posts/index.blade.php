@extends("layouts.dashboard")

@section("content")


    <div class="mt-8 mr-auto ml-auto w-3/4 flex justify-center items-start flex-col">
        <a href="{{ route('posts.create') }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200">+ New Post</a>
    </div>

    <table class="mt-8 mr-auto ml-auto w-3/4 divide-y divide-gray-200">
        <thead class="bg-darkblue-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Content</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
        </tr>
        </thead>
        <tbody class=" divide-y divide-gray-200">
        @foreach($posts as $post)
            <tr class="text-left">
                <td class="px-6 py-4 whitespace-nowrap ">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-900">{{$post->title}}</a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">{{$post->contents}}</td>
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
