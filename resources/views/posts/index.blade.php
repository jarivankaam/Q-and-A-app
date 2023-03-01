@extends("layouts.dashboard")


@section("content")
    <main>
        <p><a href="" class="btn btn-primary">+ New Post</a></p>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Titel</th>
                <th scope="col">Content</th>
                <th scope="col">Status</th>
                <th scope="col">Type</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td><a href="" class="">{{$post->title}}</a></td>
                    <td>{{$post->contents}}</td>
                    <td>{{$post->status}}</td>
                    <td>{{$post->type}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>


@endsection
