<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <header>
        <h1>Upload Image</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/upload">Upload Image</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required><br>

        <label for="posted_at">Posted At:</label>
        <input type="date" name="posted_at" required><br>

        <label for="content">Content:</label>
        <textarea name="content" required></textarea><br>

        <label for="image">Upload Image:</label>
        <input type="file" name="image" accept="image/*" required><br>

        <button type="submit">Upload</button>
    </form>
</body>
</html>
