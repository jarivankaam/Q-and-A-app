<div>
    <table>
        <thead>
            <tr>
                <th>Question</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->question }}</td>
                    <td>{{ $post->answer }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
