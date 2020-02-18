<?php include __DIR__ . '/_header.php' ?>

    <div class="container">
        <h1>Admin dashboard</h1>
        <ul>
            <li>
                <a href="index.php?controller=book&action=list" class="btn btn-info" role="button">Books</a>
            </li>
            <br>
            <li>
                <a href="index.php?controller=author&action=list" class="btn btn-success" role="button">Authors</a>
            </li>
            <br>
            <li>
                <a href="index.php?controller=genre&action=list" class="btn btn-warning" role="button">Genres</a>
            </li>
        </ul>
    </div>

<?php include __DIR__ . '/_footer.php' ?>