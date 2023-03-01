<div>
    @foreach ($posts as $post)
        <div class="card">
            <h2>{{ $post->question }}</h2>
            <p>{{ $post->answer }}</p>
        </div>
    @endforeach
</div>
