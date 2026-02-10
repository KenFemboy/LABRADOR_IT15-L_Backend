<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>

<h1>Posts</h1>

@forelse ($posts as $post)
    <article>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <hr>
    </article>
@empty
    <p>No posts found.</p>
@endforelse

</body>
</html>
