<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create a New Post</h1>

    <form action="/posts" method="POST">
        @csrf
        <label>Title:</label><br>
        <input type="text" name="title"><br><br>

        <label>Content:</label><br>
        <textarea name="content"></textarea><br><br>

        <button type="submit">Save</button>
    </form>

    <br>
    <a href="/posts">Back to Posts</a>
</body>
</html>
