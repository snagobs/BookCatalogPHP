<?php include __DIR__ . '/../_header.php' ?>

<h1>Genre</h1>

    <a href="index.php?controller=genre&action=add">Add new</a>

    <br>
    <br>

    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td></td>
        </tr>
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
                            <a href="index.php?controller=genre&action=edit&id=<?php echo $genre['id'] ?>">
                                Edit
                            </a>
                        </li>
                        <li>
                            <a href="index.php?controller=genre&action=delete&id=<?php echo $genre['id'] ?>"
                               onclick="return confirmDelete()">
                                Delete
                            </a>
                        </li>
                    </ul>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

<?php include __DIR__ . '/../_footer.php' ?>