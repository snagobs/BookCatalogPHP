<?php include __DIR__ . '/../_header.php' ?>

    <div class="container mb-3 mt-3">
        <h1>Books</h1>
        <a href="index.php?controller=book&action=add" class="btn btn-info float-right" role="button">Add new book</a>
        <br>
        <br>
        <div class="row">
            <table class="table table-striped table-bordered mytable" style="width: 100%">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Authors</th>
                    <th>Genres</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td><?php echo $book['id'] ?></td>
                        <td><?php echo $book['title'] ?></td>
                        <td><?php echo $book['description'] ?></td>
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
                            <ul>
                                <li>
                                    <a href="index.php?controller=book&action=edit&id=<?php echo $book['id'] ?>"
                                       class="btn btn-success" role="button" style="width: 70px;">
                                        Edit
                                    </a>
                                </li>
                                <br>
                                <li>
                                    <a href="index.php?controller=book&action=delete&id=<?php echo $book['id'] ?>"
                                       onclick="return confirmDelete()" class="btn btn-danger" role="button">
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Authors</th>
                    <th>Genres</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </tfoot>
        </div>
    </div>
<?php include __DIR__ . '/../_footer.php' ?>