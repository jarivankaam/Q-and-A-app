@extends("layouts.dashboard")

@section("content")


    <div class="mt-8 flex justify-center items-center flex-col">
        <a href="#" class="inline-block px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200">+ New Post</a>
    </div>

    <table class="mt-8 mr-auto ml-auto w-3/4 divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Content</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
        </tr>
        </thead>
        <tbody class=" divide-y divide-gray-200">
        @foreach($posts as $post)
            <tr class="text-left">
                <td class="px-6 py-4 whitespace-nowrap ">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-900">{{$post->title}}</a>
                </td>
                <td  class="px-6 py-4 whitespace-nowrap">{{$post->contents}}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{$post->status}}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{$post->type}}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{$post->type}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
