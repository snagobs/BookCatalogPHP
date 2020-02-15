<?php include __DIR__ . '/../_header.php' ?>

    <h1>Search</h1>

    <form>
        <select name="author">
            <option value="">Select author</option>
            <?php foreach ($authors as $author): ?>
                <option value="<?php echo $author['id'] ?>"
                    <?php if (isset($_GET['author']) && $author['id'] == $_GET['author']): ?>
                        selected="selected"
                    <?php endif ?>
                >
                    <?php echo $author['name'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <select name="genre">
            <option value="">Select genre</option>
            <?php foreach ($genres as $genre): ?>
                <option value="<?php echo $genre['id'] ?>"
                    <?php if (isset($_GET['genre']) && $genre['id'] == $_GET['genre']): ?>
                        selected="selected"
                    <?php endif ?>
                >
                    <?php echo $genre['name'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <button type="submit">Search</button>
    </form>
    <br>
    <br>

<?php if ($books): ?>
    <table>
        <tr>
            <th>Title</th>
            <th>Authors</th>
            <th>Genres</th>
            <th>Price</th>
            <th></th>
        </tr>
        <?php foreach ($books as $book): ?>
            <tr>
                <td>
                    <?php echo $book['title'] ?>
                </td>
                <td>
                    <ul>
                        <?php foreach ($book['authors'] as $author): ?>
                            <li><?php echo $author['name'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </td>
                <td>
                    <ul>
                        <?php foreach ($book['genres'] as $genre): ?>
                            <li><?php echo $genre['name'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </td>
                <td><?php echo $book['price'] ?></td>
                <td>
                    <a href="index.php?controller=book&action=detail&id=<?php echo $book['id'] ?>">
                        Detail
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

<?php endif ?>

<?php include __DIR__ . '/../_footer.php' ?>