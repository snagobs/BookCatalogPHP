<?php include __DIR__ . '/../_header.php' ?>

    <div class="container mb-3 mt-3">
        <h1><?php echo $book->getTitle() ?></h1>
        <small>
            Authors:
            <?php foreach ($book->getAuthors() as $author): ?>
                •<?php echo $author['name'] ?>
            <?php endforeach ?>
        </small>
        <br>
        <small>
            Genres:
            <?php foreach ($book->getGenres() as $genre): ?>
                •<?php echo $genre['name'] ?>
            <?php endforeach ?>
        </small>
        <br>
        <br>
        <p><?php echo nl2br($book->getDescription()) ?></p>
        <br>
        <div class="myclass">
            <h2>Buy book</h2>
            <form method="post" action="index.php?controller=book&action=buy">
                <input type="hidden" name="book_id" value="<?php echo $book->getId() ?>">
                <div class="form-group">
                    <label>Your Email address</label>
                    <input type="email" name="email" placeholder="Your email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Your name</label>
                    <input type="text" name="name" placeholder="Your name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" placeholder="Books quantity" name="qty" min="1" max="20" step="1"
                           class="form-control" required>
                </div>
                <div class="form-group" style="text-align: center">
                    <button type="submit" class="btn btn-success">Buy book</button>
                </div>
            </form>
        </div>
    </div>

<?php include __DIR__ . '/../_footer.php' ?>