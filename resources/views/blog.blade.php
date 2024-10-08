<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My Blog</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/upload">Upload Image</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="main-content">
        @foreach ($posts as $post)
            <article>
                <h2>{{ $post->title }}</h2>
                <p>Posted on {{ $post->posted_at }} by Author</p>
                <p>{{ $post->content }}</p>
                @if ($post->image_path)
                    <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" style="max-width: 100%; height: auto;">
                @endif
            </article>
        @endforeach
    </section>

    <footer>
        <p>Copyright &copy; 2024 My Blog. All rights reserved.</p>
    </footer>
</body>
</html>
