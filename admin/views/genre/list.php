<?php include __DIR__ . '/../_header.php' ?>

    <div class="container mb-3 mt-3">
        <h1>Genres</h1>
        <a href="index.php?controller=genre&action=add" class="btn btn-info float-left" role="button">Add new
            genre</a>
        <br>
        <br>
        <br>
        <div class="row">
            <table class="table table-striped table-bordered mytable" style="width: 100%">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($genres as $genre): ?>
                    <tr>
                        <td>
                            <?php echo $genre['id'] ?>
                        </td>
                        <td>
                            <a href="index.php?controller=genre&action=edit&id=<?php echo $genre['id'] ?>">
                                <?php echo $genre['name'] ?>
                            </a>
                        </td>
                        <td>
                            <ul>
                                <li>
                                    <a href="index.php?controller=genre&action=edit&id=<?php echo $genre['id'] ?>"
                                       class="btn btn-success" role="button" style="width: 70px;">
                                        Edit
                                    </a>
                                </li>
                                <br>
                                <li>
                                    <a href="index.php?controller=genre&action=delete&id=<?php echo $genre['id'] ?>"
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