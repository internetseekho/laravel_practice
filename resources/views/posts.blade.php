<!DOCTYPE html>

<title>Sample Blog</title>
<link rel="stylesheet" href="/app.css" />

<body>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="post/{{$post->slug}}">
                    {{ $post->title }}
                </a>
            </h1>
            <div>
                {!! $post->body !!}
            </div>
        </article>
    @endforeach
</body>

<script src="/app.js"></script>