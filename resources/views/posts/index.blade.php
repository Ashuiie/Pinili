<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>
    <h1>List of Posts</h1>
    <a href="/posts/create">Add New Post</a>

    @foreach($posts as $post)
        <div style="margin-bottom: 20px;">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>

        <a href="/posts/{{ $post->id }}/edit">Edit</a>

<form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Delete this post?')">Delete</button>
</form>

        </div>
    @endforeach
</body>
</html>
