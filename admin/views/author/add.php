<?php include __DIR__ . '/../_header.php' ?>

<h1>Add new author</h1>

<form method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Create</button></td>
        </tr>
    </table>
</form>

<?php include __DIR__ . '/../_footer.php' ?>