<?php include __DIR__ . '/../_header.php' ?>

    <div class="container mb-3 mt-3">
        <h1>Authors</h1>
        <a href="index.php?controller=author&action=add" class="btn btn-info float-left" role="button">Add new
            author</a>
        <br>
        <br>
        <br>
        <div class="row">
            <table class="table table-striped table-bordered mytable" style="width: 100%">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($authors as $author): ?>
                    <tr>
                        <td>
                            <?php echo $author['id'] ?>
                        </td>
                        <td>
                            <a href="index.php?controller=author&action=edit&id=<?php echo $author['id'] ?>">
                                <?php echo $author['name'] ?>
                            </a>
                        </td>
                        <td>
                            <ul>
                                <li>
                                    <a href="index.php?controller=author&action=edit&id=<?php echo $author['id'] ?>"
                                       class="btn btn-success" role="button" style="width: 70px;">
                                        Edit
                                    </a>
                                </li>
                                <br>
                                <li>
                                    <a href="index.php?controller=author&action=delete&id=<?php echo $author['id'] ?>"
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
                <td>Id</td>
                <td>Name</td>
                <td>Action</td>
                </tfoot>
            </table>
        </div>
    </div>

<?php include __DIR__ . '/../_footer.php' ?>